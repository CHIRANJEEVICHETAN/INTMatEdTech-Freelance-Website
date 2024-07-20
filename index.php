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
        <title>ɪɴᴛᴍᴀᴛ ᴇᴅᴛᴇᴄʜ-Home</title>
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
                            <li class="nav-item active">
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
                                <h1>
                                    <span style="font-size: 35px; font-weight: 700; color: #fff"
                                        class="Empowering">Empowering</span>
                                </h1>
                                <span style="font-size: 35px; font-weight: 600; color: #fff">
                                    <span clsas="d-block">Minds Together</span>
                                </span>
                                <div style="margin-top: 8px; font-size: larger">
                                    <p class="mb-4">
                                        At INTMAT EDTECH, we empower minds together. Join us to unlock
                                        your potential and shape a brighter future.
                                    </p>
                                </div>
                                <p>
                                    <a href="courses.php" class="btn btn-secondary me-2">Browse Courses</a>
                                    <!-- ><a href="#" class="btn btn-white-outline">Explore Jobs</a> -->
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="hero-img-wrap Hero-img-1">
                                <img src="assets/img/final-removebg-preview.png" class="img-fluid" alt="educational" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Hero Section -->

            <!-- Start Product Section -->
            <div class="product-section" id="product-section">
                <div class="container">
                    <div class="row">
                        <!-- Start Column 1 -->
                        <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                            <h2 class="mb-4 section-title">Top Courses Available</h2>
                            <p class="mb-4">
                                Come join INTMAT EdTech and embark on a transformative learning
                                adventure, where innovation meets education for a brighter future!
                            </p>
                            <p><a href="courses.php" class="btn">Explore</a></p>
                        </div>
                        <!-- End Column 1 -->

                        <!-- Start Column 2 -->
                        <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                            <a class="product-item products programming" href="cart.php">
                                <img src="images/programming3.png" class="img-fluid product-thumbnail" />
                                <h3 class="product-title">All Programming Languages</h3>
                                <!-- <strong class="product-price"
                >Starting from <br />&#8377; 500</strong
              > -->

                                <span class="icon-cross">
                                    <img src="images/cross.svg" class="img-fluid" />
                                </span>
                            </a>
                        </div>
                        <!-- End Column 2 -->

                        <!-- Start Column 3 -->
                        <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                            <a class="product-item products" href="cart.php">
                                <img src="images/MBBS.png" class="img-fluid product-thumbnail" />
                                <h3 class="product-title">Medical Entrance Exam (NEET)</h3>
                                <!-- <strong class="product-price"
                >Price: <del>&#8377;7000</del><br />&#8377;5000</strong
              > -->

                                <span class="icon-cross">
                                    <img src="images/cross.svg" class="img-fluid" />
                                </span>
                            </a>
                        </div>
                        <!-- End Column 3 -->

                        <!-- Start Column 4 -->
                        <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                            <a class="product-item products" href="cart.php">
                                <img src="images/KCET.png" class="img-fluid product-thumbnail" />
                                <h3 class="product-title">
                                    Karnataka Common Entrance Test (KCET)
                                </h3>
                                <!-- <strong class="product-price"
                >Price: <del>&#8377;3000</del><br />&#8377;2000</strong
              > -->

                                <span class="icon-cross">
                                    <img src="images/cross.svg" class="img-fluid" />
                                </span>
                            </a>
                        </div>
                        <!-- End Column 4 -->
                    </div>
                </div>
            </div>
            <!-- End Product Section -->

            <!-- Start Why Choose Us Section -->
            <div class="why-choose-section">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-6">
                            <h2 class="section-title">Why Choose Us</h2>
                            <p>
                                Why choose us? Your gateway to comprehensive success with expert
                                training in campus recruitment, competitive exams, engineering,
                                and medical entrance tests!
                            </p>

                            <div class="row my-5">
                                <div class="col-6 col-md-6">
                                    <div class="feature">
                                        <div class="icon">
                                            <img src="images/graducation-hat-removebg-preview.png" alt="Degree"
                                                class="imf-fluid" width="80px" />
                                        </div>
                                        <h3>Campus Recruitment Training</h3>
                                        <p>
                                            Elevate your career with our targeted campus recruitment
                                            training.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-6 col-md-6">
                                    <div class="feature">
                                        <div class="icon">
                                            <img src="images/NEET-small-logo.png" alt="Image" class="imf-fluid"
                                                width="80px" />
                                        </div>
                                        <h3>Medical Entrance Exam</h3>
                                        <p>
                                            Secure your medical future with our focused NEET exam
                                            preparation.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-6 col-md-6">
                                    <div class="feature">
                                        <div class="icon">
                                            <img src="images/Live-small-logo.png" alt="Image" class="imf-fluid"
                                                width="80px" />
                                        </div>
                                        <h3>Live Interactive Sessions</h3>
                                        <p>
                                            Experience dynamic learning with our engaging live
                                            interactive services.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-6 col-md-6">
                                    <div class="feature">
                                        <div class="icon">
                                            <img src="images/competative-small-logo.png" alt="Image" class="imf-fluid"
                                                width="80px" />
                                        </div>
                                        <h3>Crack Competative Exams</h3>
                                        <p>
                                            Excel in competitive exams with our specialized training
                                            programs.
                                        </p>
                                    </div>
                                </div>
                                <div class="read-more-button">
                                    <a href="services.php"><button type="button">Read More ></button></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="img-wrap why-choose-img">
                                <img src="images/why-choose-us-img-degree.jpg" alt="Image" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Why Choose Us Section -->

            <!-- Start We Help Section -->
            <div class="we-help-section">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-7 mb-5 mb-lg-0">
                            <div class="imgs-grid">
                                <div class="grid grid-1">
                                    <img src="images/skill-demo.jpg" alt="Untree.co" />
                                </div>
                                <div class="grid grid-2">
                                    <img src="images/Hiring.png" alt="Hiring" />
                                </div>
                                <div class="grid grid-3">
                                    <img src="images/JEE.jpg" alt="PG-medical-exam" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 ps-lg-5">
                            <h2 class="section-title mb-4">
                                We guide your academic journey to excellence.
                            </h2>
                            <p>
                                Embark on a transformative educational experience with INTMAT
                                EdTech. Our expert guidance ensures success through comprehensive
                                services in campus recruitment, competitive exams, engineering
                                entrance, and medical entrance. Join us to unlock your full
                                potential!
                            </p>

                            <ul class="list-unstyled custom-list my-4">
                                <li>Guidance</li>
                                <li>Success</li>
                                <li>Comprehensive</li>
                                <li>Potential</li>
                            </ul>
                            <p><a href="career.php" class="btn">Explore</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End We Help Section -->

            <!-- Start Popular Product -->
            <div class="popular-product">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <div class="product-item-sm d-flex">
                                <div class="thumbnail products">
                                    <img src="images/programming3.png" alt="Image" class="img-fluid" />
                                </div>
                                <div class="pt-3">
                                    <h3>All Programming Languages</h3>
                                    <p>
                                        Master the language of innovation with our comprehensive
                                        programming training.
                                    </p>
                                    <p><a href="courses.php">Read More</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <div class="product-item-sm d-flex">
                                <div class="thumbnail products">
                                    <img src="images/MBBS.png" alt="Image" class="img-fluid" />
                                </div>
                                <div class="pt-3">
                                    <h3>Medical Entrance Exam (NEET)</h3>
                                    <p>
                                        Prepare for medical excellence with our focused NEET training.
                                    </p>
                                    <p><a href="courses.php">Read More</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <div class="product-item-sm d-flex">
                                <div class="thumbnail products">
                                    <img src="images/KCET.png" alt="Image" class="img-fluid" />
                                </div>
                                <div class="pt-3">
                                    <h3>Karnataka Common Entrance Test (KCET)</h3>
                                    <p>Achieve your KCET goals with our personalized coaching.</p>
                                    <p><a href="courses.php">Read More</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Popular Product -->

            <!-- Start Testimonial Slider -->
            <div class="testimonial-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 mx-auto text-center">
                            <h2 class="section-title">Testimonials</h2>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="testimonial-slider-wrap text-center">
                                <div id="testimonial-nav">
                                    <span class="prev" data-controls="prev"><span
                                            class="fa fa-chevron-left"></span></span>
                                    <span class="next" data-controls="next"><span
                                            class="fa fa-chevron-right"></span></span>
                                </div>

                                <div class="testimonial-slider">
                                    <div class="item">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8 mx-auto">
                                                <div class="testimonial-block text-center">
                                                    <blockquote class="mb-5">
                                                        <p>
                                                            &ldquo;INTMAT EdTech's personalized guidance helped
                                                            me ace my engineering entrance exam. I'm grateful
                                                            for their support in shaping my future.&rdquo;
                                                        </p>
                                                    </blockquote>

                                                    <div class="author-info">
                                                        <div class="author-pic">
                                                            <img src="assets/img/dummy-woman.png" alt="Aishwarya"
                                                                class="img-fluid" />
                                                        </div>
                                                        <h3 class="font-weight-bold">Aishwarya</h3>
                                                        <span class="position d-block mb-3">CSE, Student, at T John
                                                            Institute of Technology
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END item -->

                                    <div class="item">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8 mx-auto">
                                                <div class="testimonial-block text-center">
                                                    <blockquote class="mb-5">
                                                        <p>
                                                            &ldquo;I highly recommend INTMAT EdTech for their
                                                            comprehensive campus recruitment training. Thanks to
                                                            their expertise, I secured my dream job right out of
                                                            college.&rdquo;
                                                        </p>
                                                    </blockquote>

                                                    <div class="author-info">
                                                        <div class="author-pic">
                                                            <img src="assets/img/dummy-woman.png" alt="Sneha"
                                                                class="img-fluid" />
                                                        </div>
                                                        <h3 class="font-weight-bold">Sneha</h3>
                                                        <span class="position d-block mb-3">ISE, Student, at Reva
                                                            University</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END item -->

                                    <div class="item">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8 mx-auto">
                                                <div class="testimonial-block text-center">
                                                    <blockquote class="mb-5">
                                                        <p>
                                                            &ldquo;INTMAT EdTech's NEET exam preparation program
                                                            was instrumental in my success. Their resources and
                                                            support ensured I was well-prepared for the
                                                            challenging medical entrance test.&rdquo;
                                                        </p>
                                                    </blockquote>

                                                    <div class="author-info">
                                                        <div class="author-pic">
                                                            <img src="assets/img/Dummy-men.jpg" alt="Rahul"
                                                                class="img-fluid" />
                                                        </div>
                                                        <h3 class="font-weight-bold">Rahul</h3>
                                                        <span class="position d-block mb-3">MBBS, Student, at AIIMS
                                                            Delhi.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Testimonial Slider -->

            <?php
            include ('footer.php');
            ?>

            <script src="js/bootstrap.bundle.min.js"></script>
            <script src="js/tiny-slider.js"></script>
            <script src="js/custom.js"></script>
            <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
            <script>
            var typed = new Typed(".Empowering", {
                strings: ["Empowering", "Encouraging"],
                typeSpeed: 150,
                backSpeed: 150,
                loop: true,
            });
            </script>
        </div>
    </body>

</html>