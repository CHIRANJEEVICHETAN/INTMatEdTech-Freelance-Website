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
        <title>ɪɴᴛᴍᴀᴛ ᴇᴅᴛᴇᴄʜ-About us</title>
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
                            <li class="nav-item active"><a class="nav-link" href="about.php">About us</a></li>
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
                                <h1>About Us</h1>
                                <p class="mb-4">
                                    <b>Welcome to INTMAT EdTech!</b><br /><br />

                                    INTMAT EdTech offers tailored training solutions for exams,
                                    upskilling, and corporate training. Join us for more
                                    information.
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
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="img-wrap why-choose-img">
                                <img src="images/why-choose-us-img-degree.jpg" alt="Image" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                    <div class="read-more-button">
                        <a href="courses.php"><button type="button">Read More ></button></a>
                    </div>
                </div>
            </div>
            <!-- End Why Choose Us Section -->

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

            <div class="about-us">
                <p></p>
                <pre>
        <h2>About INTMAT EdTech </h2>
<p>At INTMAT EdTech, we are committed to delivering transformative training solutions tailored to meet the evolving needs of individuals and organizations. 
  Headquartered in Bangalore, we offer a comprehensive suite of specialized courses designed to empower learners across various domains.</p>

<h3>Core Offerings:</h3>

<h4>1. Exam Preparation Courses:</h4>
   - <b>IIT-JEE:</b> Prepare for one of the most competitive engineering entrance exams in India with our structured programs and expert guidance.
   - <b>NEET:</b> Excel in the medical entrance exams with our meticulously crafted courses, ensuring thorough preparation and success.
   - <b>GATE:</b> Crack the Graduate Aptitude Test in Engineering (GATE) with our comprehensive training modules led by experienced faculty.
   - <b>GRE, GMAT, CAT:</b> We offer exam preparation courses for these standardized tests, helping students achieve their desired scores.

<h4>2. Upskilling Programs:</h4>
   - <b>Technical Skills:</b> Explore courses in programming, data science, cloud computing, and other cutting-edge technologies to enhance your skill set.
   - <b>Soft Skills:</b> Develop essential soft skills such as communication, leadership, and critical thinking to succeed in today's competitive landscape.
   - <b>Professional Development:</b> Advance your career with our professional development courses tailored to meet industry demands.

<h4>3. Corporate Training Solutions:</h4>
   - <b>Technical Training:</b> Equip your workforce with the latest technical skills through our customized corporate training programs.
   - <b>Soft Skills Development:</b> Foster a culture of continuous learning and growth within your organization with our soft skills training initiatives.
   <br>

<h3>Why Choose INTMAT EdTech?</h3>
- <b>Personalized Approach:</b> We understand that every learner is unique, which is why we customize our programs to meet individual needs.
- <b>Interactive Learning:</b> Engage in interactive sessions designed to promote active participation and deeper understanding.
- <b>Experienced Faculty:</b> Benefit from the guidance of experienced faculty members who provide strategic mentorship and support.
- <b>Innovation and Quality:</b> We are committed to delivering innovative solutions of the highest quality, ensuring our learners excel in their endeavors.

<h3>Get in Touch</h3>
<p>   Experience the transformative power of education with INTMAT EdTech. 
   Whether you are a student aspiring to crack competitive exams or an organization looking to upskill your workforce, we have the right solutions for you. 
   Contact us today to discuss your specific requirements and embark on your journey towards success.
      </p></pre>
            </div>

            <?php
            include ('footer.php');
            ?>

            < <script src="js/bootstrap.bundle.min.js">
                </script>
                <script src="js/tiny-slider.js"></script>
                <script src="js/custom.js"></script>
        </div>
    </body>

</html>