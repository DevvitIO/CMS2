<?php
include_once 'connections/db.php';
if($user->is_loggedin())
{
 $user->redirect('home.php');
}

?>
<!DOCTYPE HTML>
<html lang=en>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,50,700" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    <body>
        <div class="wrapper">
            <header class="header-top">
                <div class="logo">Devvit <a href="index.php"><span class="logo-io">.io</span></a></div>
                <div class="tagline">SOME. TAGLINE. HERE.</div>
                <ul class="authorization">
                    <a href="signup.php"><li>Sign in</li></a>
                    <a href="signup.php"><li>Register</li></a>
                </ul>
            </header>

            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Recent</a></li>
                    <li><a href="#">Trending</a></li>
                    <li><a href="#">Browse</a></li>
                    <li><a href="#">More</a></li>
                </ul>
            </nav>

            <main>
                <section class="top-entry-container">
                    <div class="top-entry-image"></div>
                    <div class="top-entry-info">
                        <div class="top-entry-content">
                            <h3 class="top-entry-title">Digging in JavaScript</h3>
                            <p class="top-entry-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
                            <p class="top-entry-author">Author: <span class="top-entry-author-name">CluelessUser32</span></p>
                        </div>
                        <div class="top-entry-buttons">
                            <a href="#" class="top-entry-button button-read">Read</a>
                            <a href="#" class="top-entry-button button-save">Save</a>
                        </div>
                    </div>
                </section>

                <section class="content-container">
                    <div class="content-category-container">
                        <header class="content-header">
                            <span>Staff Picks</span>
                            <a href="" class="content-header-category-link">More &#62;</a>
                        </header>
                        <div class="post-preview-container">
                            <div class="post-preview">
                                <div class="post-preview-image"></div>
                                <div class="post-preview-info">
                                    <h6 class="post-preview-title">Entry Title</h6>
                                    <p class="post-preview-text">Lorem Ipsum is simply a dummy text of the vast wonder of the world.  Maybe, that’s a lie but it...</p>
                                    <div class="post-preview-buttons">
                                        <a href="#" class="post-preview-button button-read">Read</a>
                                        <a href="#" class="post-preview-button button-save">Save</a>
                                    </div>
                                </div>
                            </div>
                            <div class="post-preview">
                                <div class="post-preview-image"></div>
                                <div class="post-preview-info">
                                    <h6 class="post-preview-title">Entry Title</h6>
                                    <p class="post-preview-text">Lorem Ipsum is simply a dummy text of the vast wonder of the world.  Maybe, that’s a lie but it...</p>
                                    <div class="post-preview-buttons">
                                        <a href="#" class="post-preview-button button-read">Read</a>
                                        <a href="#" class="post-preview-button button-save">Save</a>
                                    </div>
                                </div>
                            </div>
                            <div class="post-preview">
                                <div class="post-preview-image"></div>
                                <div class="post-preview-info">
                                    <h6 class="post-preview-title">Entry Title</h6>
                                    <p class="post-preview-text">Lorem Ipsum is simply a dummy text of the vast wonder of the world.  Maybe, that’s a lie but it...</p>
                                    <div class="post-preview-buttons">
                                        <a href="#" class="post-preview-button button-read">Read</a>
                                        <a href="#" class="post-preview-button button-save">Save</a>
                                    </div>
                                </div>
                            </div>
                            <div class="post-preview">
                                <div class="post-preview-image"></div>
                                <div class="post-preview-info">
                                    <h6 class="post-preview-title">Entry Title</h6>
                                    <p class="post-preview-text">Lorem Ipsum is simply a dummy text of the vast wonder of the world.  Maybe, that’s a lie but it...</p>
                                    <div class="post-preview-buttons">
                                        <a href="#" class="post-preview-button button-read">Read</a>
                                        <a href="#" class="post-preview-button button-save">Save</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="content-category-container">
                        <header class="content-header">
                            <span>Members Picks</span>
                            <a href="" class="content-header-category-link">More &#62;</a>
                        </header>
                        <div class="post-preview-container">
                            <div class="post-preview">
                                <div class="post-preview-image"></div>
                                <div class="post-preview-info">
                                    <h6 class="post-preview-title">Entry Title</h6>
                                    <p class="post-preview-text">Lorem Ipsum is simply a dummy text of the vast wonder of the world.  Maybe, that’s a lie but it...</p>
                                    <div class="post-preview-buttons">
                                        <a href="#" class="post-preview-button button-read">Read</a>
                                        <a href="#" class="post-preview-button button-save">Save</a>
                                    </div>
                                </div>
                            </div>
                            <div class="post-preview">
                                <div class="post-preview-image"></div>
                                <div class="post-preview-info">
                                    <h6 class="post-preview-title">Entry Title</h6>
                                    <p class="post-preview-text">Lorem Ipsum is simply a dummy text of the vast wonder of the world.  Maybe, that’s a lie but it...</p>
                                    <div class="post-preview-buttons">
                                        <a href="#" class="post-preview-button button-read">Read</a>
                                        <a href="#" class="post-preview-button button-save">Save</a>
                                    </div>
                                </div>
                            </div>
                            <div class="post-preview">
                                <div class="post-preview-image"></div>
                                <div class="post-preview-info">
                                    <h6 class="post-preview-title">Entry Title</h6>
                                    <p class="post-preview-text">Lorem Ipsum is simply a dummy text of the vast wonder of the world.  Maybe, that’s a lie but it...</p>
                                    <div class="post-preview-buttons">
                                        <a href="#" class="post-preview-button button-read">Read</a>
                                        <a href="#" class="post-preview-button button-save">Save</a>
                                    </div>
                                </div>
                            </div>
                            <div class="post-preview">
                                <div class="post-preview-image"></div>
                                <div class="post-preview-info">
                                    <h6 class="post-preview-title">Entry Title</h6>
                                    <p class="post-preview-text">Lorem Ipsum is simply a dummy text of the vast wonder of the world.  Maybe, that’s a lie but it...</p>
                                    <div class="post-preview-buttons">
                                        <a href="#" class="post-preview-button button-read">Read</a>
                                        <a href="#" class="post-preview-button button-save">Save</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="content-category-container">
                        <header class="content-header">
                            <span>Development</span>
                            <a href="" class="content-header-category-link">More &#62;</a>
                        </header>
                        <div class="post-preview-container">
                            <div class="post-preview">
                                <div class="post-preview-image"></div>
                                <div class="post-preview-info">
                                    <h6 class="post-preview-title">Entry Title</h6>
                                    <p class="post-preview-text">Lorem Ipsum is simply a dummy text of the vast wonder of the world.  Maybe, that’s a lie but it...</p>
                                    <div class="post-preview-buttons">
                                        <a href="#" class="post-preview-button button-read">Read</a>
                                        <a href="#" class="post-preview-button button-save">Save</a>
                                    </div>
                                </div>
                            </div>
                            <div class="post-preview">
                                <div class="post-preview-image"></div>
                                <div class="post-preview-info">
                                    <h6 class="post-preview-title">Entry Title</h6>
                                    <p class="post-preview-text">Lorem Ipsum is simply a dummy text of the vast wonder of the world.  Maybe, that’s a lie but it...</p>
                                    <div class="post-preview-buttons">
                                        <a href="#" class="post-preview-button button-read">Read</a>
                                        <a href="#" class="post-preview-button button-save">Save</a>
                                    </div>
                                </div>
                            </div>
                            <div class="post-preview">
                                <div class="post-preview-image"></div>
                                <div class="post-preview-info">
                                    <h6 class="post-preview-title">Entry Title</h6>
                                    <p class="post-preview-text">Lorem Ipsum is simply a dummy text of the vast wonder of the world.  Maybe, that’s a lie but it...</p>
                                    <div class="post-preview-buttons">
                                        <a href="#" class="post-preview-button button-read">Read</a>
                                        <a href="#" class="post-preview-button button-save">Save</a>
                                    </div>
                                </div>
                            </div>
                            <div class="post-preview">
                                <div class="post-preview-image"></div>
                                <div class="post-preview-info">
                                    <h6 class="post-preview-title">Entry Title</h6>
                                    <p class="post-preview-text">Lorem Ipsum is simply a dummy text of the vast wonder of the world.  Maybe, that’s a lie but it...</p>
                                    <div class="post-preview-buttons">
                                        <a href="#" class="post-preview-button button-read">Read</a>
                                        <a href="#" class="post-preview-button button-save">Save</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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
    </body>
</html>
