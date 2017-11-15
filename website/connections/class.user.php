<?php
class USER{

    private $db;
    public $message = array();

    function __construct($db_con)
    {
        $this->db = $db_con;
    }

    public function register($user,$pass,$email)
    {
        try
        {
          $protected_password = password_hash($pass, PASSWORD_DEFAULT);
          $stmt = $this->db->prepare("INSERT INTO users(id, username,password,email)
          VALUES('', :username, :password, :email)");

           $stmt->bindparam(":username", $user);
           $stmt->bindparam(":password", $protected_password);
           $stmt->bindparam(":email", $email);
           $stmt->execute();

           return $stmt;
        }

        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    public function login($username,$password,$email)
    {
       try
       {
          $stmt = $this->db->prepare("SELECT * FROM users WHERE username=:user OR email=:email LIMIT 1");
          $stmt->execute(array(':user'=>$username, ':email'=>$email));
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
          if($stmt->rowCount() > 0)
          {
             if(password_verify($password, $userRow['password']))
             {
                $_SESSION['user_session'] = $userRow['username'];
                return true;
             }
             else
             {
                return false;
             }
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }

    public function validate()
    {

        if(isset($_POST['signup-btn']))
        {
        $username = $this->secure(trim($_POST['signup-username']));
        $password = $this->secure(trim($_POST['signup-password']));
        $email = trim($_POST['signup-email']);
        $pass_validate = $this->secure(trim($_POST['signup-password-repeat']));

        if($username=='')
        {
            $this->message[] = "Please enter a username";
        }
        else if($password=='')
        {
            $this->message[] = "Please enter a password";
        }
        else if($password!=$pass_validate)
        {
            $this->message[] = "Passwords do not match.";
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $this->message[] = "Please enter a valid email address";
        }
        else
        {
        try
        {
            $stmt = $this->db->prepare("SELECT username,email FROM users WHERE username=:username OR email=:email");
            $stmt->execute(array(":username"=>$username,":email"=>$email));
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if($row['username']==$username)
            {
                $this->message[] = "Username is already taken.";
            }
            else if($row['email']==$email)
            {
                $this->message[] = "Email is already taken.";
            }
            else
            {
                if($this->register($username, $password, $email));
                {
                    $this->message[] = "Account created.";
                }
            }

       }
       catch(PDOException $e)
       {
          echo $e->getMessage();
       }
       }
     }

     if(isset($_POST['login-btn']))
     {
         $username = $_POST['login-username'];
         $password = $_POST['login-password'];
         $email = $_POST['login-username'];

         if($this->login($username,$password,$email))
         {
            $this->redirect('home.php');
         }
         else
         {
            $this->message[] = "Wrong Information.";
            echo $username . "<br/>";
            echo $password . "<br/>";
            echo $email . "<br/>";
         }
     }
    }

    public function secure($arg)
    {
        return mysql_real_escape_string($arg);
    }

    public function is_loggedin()
    {
        if (isset($_SESSION['user_session']))
        {
            return true;
        }
    }

    public function redirect($url)
    {
        header("Location: $url");
    }

    public function logout()
    {
        session_destroy();
        unset($_SESSION['user_session']);
        header("Location: index.php");
    }
}


?>
