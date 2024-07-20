<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Sign-up</title>

        <!-- Font Icon -->
        <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css" />

        <!-- Main css -->
        <link rel="stylesheet" href="css/style.css" />
    </head>

    <body style="max-width: 100%; max-height: 100vh">
        <div class="main">
            <!-- Sign up form -->
            <section class="signup">
                <div class="container">
                    <div class="signup-content">
                        <div class="signup-form">
                            <?php 
        if (isset($_GET["error"])) {
          if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all the Fields!!</p>";
          }
          else if ($_GET["error"] == "invalidusername") {
            echo "<p>Choose a proper Username</p>";
          }
          else if ($_GET["error"] == "invalidemail") {
            echo "<p>Choose a proper Email</p>";
          }
          else if ($_GET["error"] == "passwordsdontmatch") {
            echo "<p>Passwords doesn't match!!</p>";
          }
          else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong, Try again!!</p>";
          }
          else if ($_GET["error"] == "usernametaken") {
            echo "<p>Username already exists!!</p>";
          }
          else if ($_GET["error"] == "emailtaken") {
            echo "<p>Email already exists!!</p>";
          }
          else if ($_GET["error"] == "none") {
            echo "<center><p>You have successfully signed up!!</p></center><center><p>Click on Already have an account to Login!!</p></center>";
          }
        }
        ?>
                            <h2 class="form-title">Sign up</h2>
                            <!-- <div class="social-login social-signup">
                                <span class="social-label"><i>Or Sign-up with</i></span>
                                <ul class="socials">
                                    <li>
                                        <a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a>
                                    </li>
                                </ul>
                            </div> -->
                            <form method="POST" action="../login-signup/connections/signup.inc.php"
                                class="register-form" id="register-form">
                                <div class="form-group">
                                    <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="text" name="name" id="name" placeholder="Your Name" />
                                </div>
                                <div class="form-group">
                                    <label for="email"><i class="zmdi zmdi-email"></i></label>
                                    <input type="email" name="email" id="email" placeholder="Your Email" />
                                </div>
                                <div class="form-group">
                                    <label for="uname"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="text" name="uid" id="uname" placeholder="Your UserName" />
                                </div>
                                <div class="form-group">
                                    <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                                    <input type="number" name="phone" id="phone" placeholder="Your Phone" />
                                </div>
                                <div class="form-group">
                                    <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                    <input type="password" name="pass" id="pass" placeholder="Password" />
                                </div>
                                <div class="form-group">
                                    <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                    <input type="password" name="re_pass" id="re_pass"
                                        placeholder="Repeat your password" />
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree
                                        all statements in
                                        <a href="../termsCondition.php" class="term-service">Terms of
                                            service</a></label>
                                </div>
                                <div class="form-group form-button">
                                    <input type="submit" name="submit" id="signup" class="form-submit"
                                        value="Register" />
                                </div>
                            </form>
                        </div>
                        <div class="signup-image">
                            <figure>
                                <img src="images/signup-image.jpg" alt="sing up image" />
                            </figure>
                            <a href="login.php" class="signup-image-link">Already have an account?</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>

</html>