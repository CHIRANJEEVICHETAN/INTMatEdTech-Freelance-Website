<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="author" content="Untree.co" />
        <link rel="shortcut icon" href="assets/img/Logo-removebg.png" sizes="32x32" />

        <meta name="description" content="" />
        <meta name="keywords" content="bootstrap, bootstrap4" />

        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
        <link href="css/tiny-slider.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <title>ɪɴᴛᴍᴀᴛ ᴇᴅᴛᴇᴄʜ-ThankYou</title>
    </head>

    <body>
        <div class="body-div">
            <!-- Start Header/Navigation -->
            <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark"
                arial-label="Furni navigation bar">
                <div class="container">
                    <figure class="logo-top">
                        <img src="assets/img/Logo_final.png" alt="Logo" />
                    </figure>
                    <div class="logo-brand">
                        <a class="navbar-brand intmat-heading" href="index.php">𝐈𝐍𝐓𝐌𝐀𝐓
                            𝐄𝐝𝐓𝐞𝐜𝐡<span>.</span></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarsFurni">
                        <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                            <li>
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li><a class="nav-link" href="courses.php">Courses</a></li>
                            <li><a class="nav-link" href="about.php">About us</a></li>
                            <li><a class="nav-link" href="services.php">Services</a></li>
                            <li><a class="nav-link" href="career.php">Career Hub</a></li>
                            <li><a class="nav-link" href="contact.php">Contact us</a></li>
                        </ul>

                        <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                            <?php
                         if (isset($_SESSION["useruid"])) {
                            echo "<div class='btn-group nav-link'><button type='button' class='btn btn-success dropdown-toggle' data-bs-toggle='dropdown' aria-expanded='false'>Account</button><ul class='dropdown-menu bg-success'><li><a class='dropdown-item nav-link' href='profile.php'><img src='images/user.svg'/> My Profile</a></li><li><a class='dropdown-item nav-link' href='cart.php'><img src='images/cart.svg'/> My Cart</a></li><li><hr class='dropdown-divider'></li><li><a class='dropdown-item nav-link' href='login-signup/connections/logout.inc.php'><img src='images/user.svg'/> Log out</a></li></ul></div>";
                         }
                         else {
                          echo "<li><a class='nav-link' href='login-signup/signup.php'><img src='images/user.svg'/></a></li>";
                         }
                        ?>
                            <!-- <li>
                            <a class="nav-link" href="login-signup/signup.php"><img src="images/user.svg" /></a>
                        </li> -->
                            <!-- <li>
                            <a class="nav-link" href="cart.php"><img src="images/cart.svg" /></a>
                        </li> -->
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Header/Navigation -->

            <!-- Start Hero Section -->
            <div class="hero">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-5">
                            <div class="intro-excerpt">
                                <h1>Cart</h1>
                            </div>
                        </div>
                        <div class="col-lg-7"></div>
                    </div>
                </div>
            </div>
            <!-- End Hero Section -->

            <div class="untree_co-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center pt-5">
                            <span class="display-3 thankyou-icon text-primary">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart-check mb-5"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M11.354 5.646a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                    <path fill-rule="evenodd"
                                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                </svg>
                            </span>
                            <h2 class="display-3 text-black">Thank you!</h2>
                            <p class="lead mb-5">You order was successfuly completed.</p>
                            <p>
                                <a href="shop.php" class="btn btn-sm btn-outline-black">Back to shop</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            include ('footer.php');
            ?>

            <script src="js/bootstrap.bundle.min.js"></script>
            <script src="js/tiny-slider.js"></script>
            <script src="js/custom.js"></script>
        </div>
    </body>

</html>