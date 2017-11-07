<?php
    class user extends db{
        public function register($username,$password){
            $new_password = password_hash($password, PASSWORD_DEFAULT);
            $connection = $this->connect();
            $result = $connection->query("INSERT INTO users(username, password)
            VALUES('$username','$new_password')");
            return $result;
        }

        public function is_loggedin(){
            if(isset($_SESSION['user_session'])){
                return true;
            }
        }

        public function redirect($url){
            header("Location $url");
        }

        public function logout(){
            session_destroy();
            unset($_SESSION['user_session']);
            return true;
        }
    }

    $user = new user();


?>
