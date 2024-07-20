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
        <title>ɪɴᴛᴍᴀᴛ ᴇᴅᴛᴇᴄʜ-Services</title>
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
                            <li class="nav-item active"><a class="nav-link" href="services.php">Services</a></li>
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
                                <h1>Services</h1>
                                <p class="mb-4">
                                    Empowering success through personalized exam prep, upskilling,
                                    and corporate training solutions.
                                </p>
                                <p>
                                    <a href="courses.php" class="btn btn-secondary me-2">Browse</a><a
                                        href="services.php" class="btn btn-white-outline">Explore</a>
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

            <!-- Start Why Choose Us Section -->
            <div class="why-choose-section">
                <div class="container">
                    <div class="row my-5">
                        <div class="col-6 col-md-6 col-lg-3 mb-4">
                            <div class="feature">
                                <div class="icon services-icons">
                                    <img src="images/Comprehensive-exam-prep.jpg" alt="Image" class="imf-fluid"
                                        width="150px" height="120px" />
                                </div>
                                <h3>Comprehensive Exam Preparation Courses</h3>
                                <p>
                                    We Offer preparation courses for competitive exams such as
                                    IIT-JEE, NEET, GATE, and others to help students excel in their
                                    academic pursuits.
                                </p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6 col-lg-3 mb-4">
                            <div class="feature">
                                <div class="icon services-icons">
                                    <img src="images/upskilling-services.jpg" alt="Image" class="imf-fluid"
                                        width="150px" height="120px" />
                                </div>
                                <h3>Upskilling Programs</h3>
                                <p>
                                    We Provide training programs aimed at enhancing technical
                                    skills, soft skills, and overall professional development to
                                    individuals seeking career advancement.
                                </p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6 col-lg-3 mb-4">
                            <div class="feature">
                                <div class="icon services-icons">
                                    <img src="images/Impactful-corporate-services.jpg" alt="Image" class="imf-fluid"
                                        width="150px" height="120px" />
                                </div>
                                <h3>Impactful Corporate Training Solutions</h3>
                                <p>
                                    We Deliver customized training programs to organizations to help
                                    them stay updated with the latest industry trends, enhance
                                    workforce capabilities, and improve productivity.
                                </p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6 col-lg-3 mb-4">
                            <div class="feature">
                                <div class="icon">
                                    <img src="images/graducation-hat-removebg-preview.png" alt="Image" class="imf-fluid"
                                        width="150px" height="120px" />
                                </div>
                                <h3>Tailored Learning Experiences</h3>
                                <p>
                                    Personalized training solutions to meet the unique needs of
                                    learners, ensuring that each individual receives targeted
                                    support and guidance.
                                </p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6 col-lg-3 mb-4">
                            <div class="feature">
                                <div class="icon services-icons">
                                    <img src="images/Interactive Learning Sessions.jpg" alt="Image" class="imf-fluid"
                                        width="150px" height="120px" />
                                </div>
                                <h3>Interactive Learning Sessions</h3>
                                <p>
                                    We Facilitate engaging and interactive learning sessions to
                                    promote active participation and deeper engagement among
                                    learners.
                                </p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6 col-lg-3 mb-4">
                            <div class="feature">
                                <div class="icon services-icons">
                                    <img src="images/Experience-faculty.jpg" alt="Image" class="imf-fluid" width="150px"
                                        height="120px" />
                                </div>
                                <h3>Experienced Faculty Guidance</h3>
                                <p>
                                    We Provide expert guidance and mentorship from experienced
                                    faculty members to inspire and equip learners for academic and
                                    professional success.
                                </p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6 col-lg-3 mb-4">
                            <div class="feature">
                                <div class="icon services-icons">
                                    <img src="images/Service Quality and Innovation.png" alt="Image" class="imf-fluid"
                                        width="150px" height="120px" />
                                </div>
                                <h3>Service Quality and Innovation</h3>
                                <p>
                                    Maintaining a commitment to service quality and innovation,
                                    continuously striving to improve and innovate in delivering
                                    training solutions.
                                </p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6 col-lg-3 mb-4">
                            <div class="feature">
                                <div class="icon services-icons">
                                    <img src="images/placement-training-services.jpg" alt="Image" class="imf-fluid"
                                        width="150px" height="120px" />
                                </div>
                                <h3>Placement Training and Career Support</h3>
                                <p>
                                    We Offer placement training programs and career support services
                                    to help students and professionals prepare for job interviews,
                                    improve their CV writing skills, and enhance their
                                    employability.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Why Choose Us Section -->
            <div class="download">
                <p>For more information, feel free to check the document.</p>
                <div class="pdf-download">
                    <button type="button">
                        <a href="https://drive.google.com/file/d/1GhegD1ZUkRM_BJnTgny7epnkRNHuuvaK/view?usp=sharing"
                            target="_blank">Click Here</a>
                    </button>
                </div>
            </div>

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
        </div>
    </body>

</html>