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
        <title>ɪɴᴛᴍᴀᴛ ᴇᴅᴛᴇᴄʜ-Terms&conditions</title>
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

            <div class="terms-main" style="padding: 30px 90px">
                <h2>Terms and Conditions</h2>
                <br />

                <h4>1. Course Enrollment</h4>
                <ul>
                    <li style="font-size: 1.1em">
                        Students must meet the eligibility criteria for the course they wish to enroll in. Supporting
                        documents may be required.
                    </li>
                    <li style="font-size: 1.1em">
                        Course fees once paid are non-refundable and non-transferrable under any circumstances.
                    </li>
                    <li style="font-size: 1.1em">
                        INTMAT EdTech reserves the right to cancel, reschedule, or change the delivery mode of any
                        course.
                    </li>
                </ul>

                <h4>2. Course Delivery</h4>
                <ul>
                    <li style="font-size: 1.1em">
                        INTMAT EdTech will make every effort to deliver courses as per the schedule and methodology
                        communicated. However, we reserve the right to change instructors, reschedule classes, or modify
                        the
                        delivery approach if needed.
                    </li>
                </ul>

                <h4>3. Code of Conduct</h4>
                <ul>
                    <li style="font-size: 1.1em">
                        Students are expected to maintain discipline and decorum during classes. Any kind of
                        misbehavior,
                        indiscipline, or distraction of other students will lead to immediate cancellation of admission.
                    </li>
                </ul>

                <h4>4. Course Materials</h4>
                <ul>
                    <li style="font-size: 1.1em">
                        All course materials and content provided by INTMAT EdTech are solely for the purpose of the
                        enrolled students' learning. Reproduction, distribution, or misuse of these materials is
                        strictly
                        prohibited.
                    </li>
                </ul>

                <h4>5. Certifications</h4>
                <ul>
                    <li style="font-size: 1.1em">
                        Students will receive certificates upon successful course completion. INTMAT EdTech does not
                        guarantee any specific exam outcome or job guarantee post training.
                    </li>
                </ul>

                <h4>6. Payments and Refunds</h4>
                <ul>
                    <li style="font-size: 1.1em">
                        All fees must be paid upfront before course commencement. Late payments will attract penalties.
                    </li>
                    <li style="font-size: 1.1em">
                        Refunds will only be provided if INTMAT cancels a course. No refunds are allowed once a student
                        has
                        enrolled in a course.
                    </li>
                </ul>

                <h4>7. Governing Law</h4>
                <ul>
                    <li style="font-size: 1.1em">
                        These terms and conditions shall be governed by the laws of India. Any disputes arising shall be
                        subject to the exclusive jurisdiction of courts in Bangalore.
                    </li>
                </ul>

                <p style="font-size: 1.1em">
                    We reserve the right to modify these terms and conditions at any time without prior individual
                    notice,
                    and such changes will be updated on our website. Please review these terms regularly to stay
                    updated.
                </p>

                <br />

                <h2>Additional Terms and Conditions</h2>
                <br />

                <h4>1. Course Enrollment and Payment:</h4>
                <ul>
                    <li style="font-size: 1.1em">
                        To enroll in a Course, you must follow the registration process on our website and provide
                        accurate
                        and complete information.
                    </li>
                    <li style="font-size: 1.1em">
                        By enrolling in a Course, you agree to pay the specified fees as indicated on the website.
                        Payment
                        can be made through the provided payment methods.
                    </li>
                    <li style="font-size: 1.1em">
                        All fees are non-refundable unless otherwise stated in our refund policy.
                    </li>
                </ul>

                <h4>2. Course Access and Use:</h4>
                <ul>
                    <li style="font-size: 1.1em">
                        Upon successful enrollment and payment, you will be granted access to the Course materials for
                        your
                        personal use only.
                    </li>
                    <li style="font-size: 1.1em">
                        You may not reproduce, distribute, or modify the Course materials without prior written
                        permission
                        from the Company.
                    </li>
                    <li style="font-size: 1.1em">
                        The Company reserves the right to suspend or terminate your access to the Courses if you violate
                        these Terms or engage in any prohibited activities.
                    </li>
                </ul>

                <h4>3. Intellectual Property Rights:</h4>
                <ul>
                    <li style="font-size: 1.1em">
                        All Course materials, including but not limited to text, graphics, videos, and assessments, are
                        owned by the Company and are protected by copyright and other intellectual property laws.
                    </li>
                    <li style="font-size: 1.1em">
                        You are granted a limited, non-exclusive, non-transferable license to access and use the Course
                        materials solely for your personal educational purposes.
                    </li>
                </ul>

                <h4>4. Amendments and Modifications:</h4>
                <ul>
                    <li style="font-size: 1.1em">
                        The Company reserves the right to amend or modify these Terms at any time without prior notice.
                        Any
                        changes will be effective immediately upon posting on the website.
                    </li>
                    <li style="font-size: 1.1em">
                        It is your responsibility to review these Terms periodically for updates or changes. Your
                        continued
                        use of the Courses after any modifications indicates your acceptance of the revised Terms.
                    </li>
                </ul>

                <p style="font-size: 1.1em">
                    We reserve the right to modify these terms and conditions at any time without prior individual
                    notice,
                    and such changes will be updated on our website. Please review these terms regularly to stay
                    updated.
                </p>
            </div>

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