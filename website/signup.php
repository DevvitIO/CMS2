<?php
    require_once("connections/db.php");

    if($user->is_loggedin())
    {
        $user->redirect('home.php');
    }

    $user->validate();

?>
<!DOCTYPE HTML>
<html lang=en>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="wrapper">
            <header class="header-top">
                <div class="logo"><a href="index.php">Devvit<span class="logo-io">.io</span></a></div>
                <div class="tagline">SOME. TAGLINE. HERE.</div>
                <ul class="authorization">
                    <li><a href="#">Sign in</a></li>
                    <li><a href="#">Register</a></li>
                </ul>
            </header>

            <main>
                <div class="auth-container">
                    <header class="auth-block-header">
                        <img src="images/signup-logo.png" alt="Devvit Logo" class="auth-block-header-logo">
                        <h3 class="auth-block-header-heading">Sign up with Devvit.io</h3>
                        <p class="auth-block-paragraph">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the
                            1500s, when an unknown printer took a galley of type.
                        </p>
                    </header>
                    <div class="auth-block-form">
                        <nav>
                            <ul class="auth-action-list">
                                <li class="auth-action-list-item">Sign up</li>
                                <li class="auth-action-list-item auth-action-list-item-active">Login</li>
                            </ul>
                        </nav>
                        <form class="signup-form signup-form-disabled" id="signup-form" action="" method = "post">
                            <?php
                                foreach($user->message as $message){
                                    echo $message;
                                }
                            ?>
                            <input type="email" class="signup-form-input" placeholder="EMAIL ADDRESS" name="signup-email">
                            <input type="text" class="signup-form-input" placeholder="USERNAME" name="signup-username">
                            <input type="password" class="signup-form-input" placeholder="PASSWORD" name="signup-password">
                            <input type="password" class="signup-form-input" placeholder="REPEAT PASSWORD" name="signup-password-repeat">
                            <button type="submit" class="signup-form-submit-btn" name = "signup-btn">Sign Up</button>
                        </form>
                        <form class="signup-form" id="login-form" action="" method="post">
                            <input type="text" class="signup-form-input" placeholder="USERNAME" name="login-username" required>
                            <input type="password" class="signup-form-input" placeholder="PASSWORD" name="login-password" required>
                            <button type="submit" class="signup-form-submit-btn" name="login-btn">Login</button>
                        </form>
                        <p class="signup-terms">By signing up, you agree to the <a href="#" class="terms-link">Terms of services</a> and <a href="#" class="terms-link">Privacy Policy</a></p>
                    </div>
                </div>
            </main>
        </div>

        <footer class="main-footer">
            <ul class="footer-nav">
                <li><a href="#">Contacts</a></li>
                <li><a href="#">Status</a></li>
                <li><a href="#"><img src="images/logo.png" alt="Logo Picture" class="footer-logo"></a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </footer>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <script src="js/script.js"></script>
    </body>
</html>
