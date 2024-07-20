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
        <title>ɪɴᴛᴍᴀᴛ ᴇᴅᴛᴇᴄʜ-Courses</title>
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
                            <li class="nav-item active"><a class="nav-link" href="courses.php">Courses</a></li>
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
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="intro-excerpt">
                                <h1>Home / Courses</h1>
                            </div>
                        </div>
                        <figure class="Hero-img-courses-top">
                            <!-- <img src="images/dots-light.svg" alt="dots" /> -->
                            <img src="images/hero-image-course-2.png" alt="hero-image" />
                        </figure>
                        <div class="col-lg-7">
                            <!-- <div class="hero-img-wrap Hero-img-courses">
              <img
                src="images/hero-image-course-2.png"
                class="img-fluid"
                alt="educational"
              />
            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Hero Section -->

            <div class="untree_co-section product-section before-footer-section">
                <div class="container">
                    <div class="row">
                        <!-- start row 1  -->
                        <!-- Start Column 1 -->
                        <div class="col-12 col-md-4 col-lg-3 mb-5">
                            <a class="product-item" href="#">
                                <img src="images/JEE.jpg" class="img-fluid product-thumbnail" />
                                <h3 class="product-title">
                                    <strong> JEE Main & Advanced Full Crash Course </strong>
                                </h3>
                                <!-- <strong class="product-price">$50.00</strong> -->

                                <span class="icon-cross">
                                    <img src="images/cross.svg" class="img-fluid" />
                                </span>
                            </a>
                        </div>
                        <!-- End Column 1 -->

                        <!-- Start Column 2 -->
                        <div class="col-12 col-md-4 col-lg-3 mb-5">
                            <a class="product-item" href="#">
                                <img src="images/web-development.jpg" class="img-fluid product-thumbnail" />
                                <h3 class="product-title">
                                    <strong>Full Stack Web Development Course</strong>
                                </h3>
                                <!-- <strong class="product-price">$50.00</strong> -->

                                <span class="icon-cross">
                                    <img src="images/cross.svg" class="img-fluid" />
                                </span>
                            </a>
                        </div>
                        <!-- End Column 2 -->

                        <!-- Start Column 3 -->
                        <div class="col-12 col-md-4 col-lg-3 mb-5" id="NEET">
                            <a class="product-item" href="#">
                                <img src="images/neet-course.jpg" class="img-fluid product-thumbnail" />
                                <h3 class="product-title"><strong>NEET UG Course</strong></h3>
                                <!-- <strong class="product-price">$78.00</strong> -->

                                <span class="icon-cross">
                                    <img src="images/cross.svg" class="img-fluid" />
                                </span>
                            </a>
                        </div>
                        <!-- End Column 3 -->

                        <!-- Start Column 4 -->
                        <div class="col-12 col-md-4 col-lg-3 mb-5" id="GovExams">
                            <a class="product-item" href="#">
                                <img src="images/Gov-exam-course.jpg" class="img-fluid product-thumbnail" />
                                <h3 class="product-title">
                                    <strong>All Government Exam Training programs</strong>
                                </h3>
                                <!-- <strong class="product-price">$43.00</strong> -->

                                <span class="icon-cross">
                                    <img src="images/cross.svg" class="img-fluid" />
                                </span>
                            </a>
                        </div>
                        <!-- End Column 4 -->
                        <!-- End row 1  -->

                        <!-- start row 2 -->
                        <!-- Start Column 1 -->
                        <div class="col-12 col-md-4 col-lg-3 mb-5">
                            <a class="product-item" href="#">
                                <img src="images/corporate-training.jpg" class="img-fluid product-thumbnail" />
                                <h3 class="product-title">
                                    <strong>Corporate Trainings</strong>
                                </h3>
                                <!-- <strong class="product-price">$50.00</strong> -->

                                <span class="icon-cross">
                                    <img src="images/cross.svg" class="img-fluid" />
                                </span>
                            </a>
                        </div>
                        <!-- End Column 1 -->

                        <!-- Start Column 2 -->
                        <div class="col-12 col-md-4 col-lg-3 mb-5">
                            <a class="product-item" href="#">
                                <img src="images/placement-training-courses.png" class="img-fluid product-thumbnail" />
                                <h3 class="product-title">
                                    <strong>
                                        Placement Training Courses for |UG & PG| with Resume building
                                    </strong>
                                </h3>
                                <!-- <strong class="product-price">$50.00</strong> -->

                                <span class="icon-cross">
                                    <img src="images/cross.svg" class="img-fluid" />
                                </span>
                            </a>
                        </div>
                        <!-- End Column 2 -->

                        <!-- Start Column 3 -->
                        <div class="col-12 col-md-4 col-lg-3 mb-5">
                            <a class="product-item" href="#">
                                <img src="images/gmat-course.jpg" class="img-fluid product-thumbnail" />
                                <h3 class="product-title">
                                    <strong>GMAT Exam Full Course</strong>
                                </h3>
                                <!-- <strong class="product-price">$78.00</strong> -->

                                <span class="icon-cross">
                                    <img src="images/cross.svg" class="img-fluid" />
                                </span>
                            </a>
                        </div>
                        <!-- End Column 3 -->

                        <!-- Start Column 4 -->
                        <div class="col-12 col-md-4 col-lg-3 mb-5">
                            <a class="product-item" href="#">
                                <img src="images/gate-course.jpg" class="img-fluid product-thumbnail" />
                                <h3 class="product-title">
                                    <strong>GATE Entrance Exam Training Courses</strong>
                                </h3>
                                <!-- <strong class="product-price">$43.00</strong> -->

                                <span class="icon-cross">
                                    <img src="images/cross.svg" class="img-fluid" />
                                </span>
                            </a>
                        </div>
                        <!-- End Column 4 -->
                        <!-- End row 2 -->

                        <!-- Start row 3 -->
                        <!-- Start Column 1 -->
                        <div class="col-12 col-md-4 col-lg-3 mb-5" id="KCET">
                            <a class="product-item" href="#">
                                <img src="images/KCET.png" class="img-fluid product-thumbnail" />
                                <h3 class="product-title">
                                    <strong>
                                        K-CET (Karnataka Common Entrance Test) Full Crash Course
                                    </strong>
                                </h3>
                                <!-- <strong class="product-price">$50.00</strong> -->

                                <span class="icon-cross">
                                    <img src="images/cross.svg" class="img-fluid" />
                                </span>
                            </a>
                        </div>
                        <!-- End Column 1 -->

                        <!-- Start Column 2 -->
                        <div class="col-12 col-md-4 col-lg-3 mb-5">
                            <a class="product-item" href="#">
                                <img src="images/tution-course.jpg" class="img-fluid product-thumbnail" />
                                <h3 class="product-title">
                                    <strong>Personalised Tuitions for academic excellence</strong>
                                </h3>
                                <!-- <strong class="product-price">$50.00</strong> -->

                                <span class="icon-cross">
                                    <img src="images/cross.svg" class="img-fluid" />
                                </span>
                            </a>
                        </div>
                        <!-- End Column 2 -->

                        <!-- Start Column 3 -->
                        <div class="col-12 col-md-4 col-lg-3 mb-5">
                            <a class="product-item" href="#">
                                <img src="images/soft-skills.png" class="img-fluid product-thumbnail" />
                                <h3 class="product-title">
                                    <strong>Soft Skills Training for Better JOBS</strong>
                                </h3>
                                <!-- <strong class="product-price">$78.00</strong> -->

                                <span class="icon-cross">
                                    <img src="images/cross.svg" class="img-fluid" />
                                </span>
                            </a>
                        </div>
                        <!-- End Column 3 -->

                        <!-- Start Column 4 -->
                        <div class="col-12 col-md-4 col-lg-3 mb-5">
                            <a class="product-item" href="#">
                                <img src="images/programming-fundamentals.png" class="img-fluid product-thumbnail" />
                                <h3 class="product-title">
                                    <strong>Programming Fundamentals with Logic-building</strong>
                                </h3>
                                <!-- <strong class="product-price">$43.00</strong> -->

                                <span class="icon-cross">
                                    <img src="images/cross.svg" class="img-fluid" />
                                </span>
                            </a>
                        </div>
                        <!-- End Column 4 -->
                        <!-- End row 3 -->

                        <!-- Start row 4 -->
                        <!-- Start Column 1 -->
                        <div class="col-12 col-md-4 col-lg-3 mb-5">
                            <a class="product-item" href="#">
                                <img src="images/PG-CET-courses.jpg" class="img-fluid product-thumbnail" />
                                <h3 class="product-title">
                                    <strong> PG-CET Full Crash Course </strong>
                                </h3>
                                <!-- <strong class="product-price">$50.00</strong> -->

                                <span class="icon-cross">
                                    <img src="images/cross.svg" class="img-fluid" />
                                </span>
                            </a>
                        </div>
                        <!-- End Column 1 -->

                        <!-- Start Column 2 -->
                        <div class="col-12 col-md-4 col-lg-3 mb-5">
                            <a class="product-item" href="#">
                                <img src="images/cat-entrance-exam.png" class="img-fluid product-thumbnail" />
                                <h3 class="product-title">
                                    <strong>CAT Exam Prep Training</strong>
                                </h3>
                                <!-- <strong class="product-price">$50.00</strong> -->

                                <span class="icon-cross">
                                    <img src="images/cross.svg" class="img-fluid" />
                                </span>
                            </a>
                        </div>
                        <!-- End Column 2 -->

                        <!-- Start Column 3 -->
                        <div class="col-12 col-md-4 col-lg-3 mb-5">
                            <a class="product-item" href="#">
                                <img src="images/TOEFL-course.png" class="img-fluid product-thumbnail" />
                                <h3 class="product-title">
                                    <strong>Test Of English as a Foreign Language (For MS
                                        Programs)</strong>
                                </h3>
                                <!-- <strong class="product-price">$78.00</strong> -->

                                <span class="icon-cross">
                                    <img src="images/cross.svg" class="img-fluid" />
                                </span>
                            </a>
                        </div>
                        <!-- End Column 3 -->

                        <!-- Start Column 4 -->
                        <div class="col-12 col-md-4 col-lg-3 mb-5">
                            <a class="product-item" href="#">
                                <img src="images/GRE-courses.jpg" class="img-fluid product-thumbnail" />
                                <h3 class="product-title">
                                    <strong>GRE - Graduate record Examination</strong>
                                </h3>
                                <!-- <strong class="product-price">$43.00</strong> -->

                                <span class="icon-cross">
                                    <img src="images/cross.svg" class="img-fluid" />
                                </span>
                            </a>
                        </div>
                        <!-- End Column 4 -->
                        <!-- End row 4 -->
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