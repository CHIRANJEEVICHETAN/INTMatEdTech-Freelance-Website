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
        <title>ɪɴᴛᴍᴀᴛ ᴇᴅᴛᴇᴄʜ-Privacy-Policy</title>
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

            <div class="privacy-main" style="padding: 50px 90px;">
                <p>
                <h2><b>Privacy Policy</b></h2>

                <p>At INTMAT EdTech, we are committed to protecting your privacy and ensuring the security of your
                    personal
                    information. This <b>Privacy Policy</b> outlines how we collect, use, and safeguard your data when
                    you
                    interact
                    with our website and utilize our services.</p>

                <h3><b>Information We Collect:</b></h3>

                <ul>
                    <li><b>Personal Information:</b> When you register for our courses or services, we may collect
                        personal
                        information such as your name, email address, contact number, and payment details.</li>
                    <li><b>Usage Data:</b> We may collect information about how you interact with our website, including
                        your
                        browsing history, IP address, device information, and cookies.</li>
                </ul>

                <h3><b>How We Use Your Information:</b></h3>

                <ul>
                    <li><b>To Provide Services:</b> We use your personal information to deliver the courses, programs,
                        and
                        services
                        you have enrolled in, including communication regarding updates, schedules, and account
                        management.
                    </li>
                    <li><b>To Improve User Experience:</b> We analyze usage data to understand user preferences and
                        optimize
                        our
                        website and services to enhance your experience.</li>
                    <li><b>For Marketing Purposes:</b> With your consent, we may use your contact information to send
                        you
                        promotional materials, newsletters, and updates about our latest offerings and events.</li>
                </ul>

                <h3><b>Data Security:</b></h3>

                <ul>
                    <li>We employ industry-standard security measures to protect your personal information from
                        unauthorized
                        access,
                        disclosure, alteration, or destruction.</li>
                    <li>Your payment information is encrypted and processed securely through trusted payment gateways to
                        ensure the
                        highest level of security.</li>
                </ul>

                <h3><b>Data Sharing and Disclosure:</b></h3>

                <ul>
                    <li>We do not sell, trade, or rent your personal information to third parties for marketing
                        purposes.
                    </li>
                    <li>We may share your information with trusted service providers and partners who assist us in
                        delivering our
                        services, such as payment processors and technical support providers.</li>
                </ul>

                <h3><b>Your Rights:</b></h3>

                <ul>
                    <li>You have the right to access, update, or delete your personal information stored in our
                        database.
                        You can
                        also opt-out of receiving promotional communications at any time.</li>
                    <li>We respect your preferences regarding the use of cookies and tracking technologies. You can
                        adjust
                        your
                        browser settings to manage cookies or opt-out of certain tracking mechanisms.</li>
                </ul>

                <h3><b>Changes to Privacy Policy:</b></h3>

                <ul>
                    <li>We reserve the right to update and revise this Privacy Policy periodically to reflect changes in
                        our
                        practices and regulatory requirements. Any significant changes will be communicated to you via
                        email
                        or
                        through our website.</li>
                </ul>

                <h3><b>Contact Us:</b></h3>

                <p>If you have any questions, concerns, or feedback regarding our Privacy Policy or the handling of your
                    personal
                    information, please contact us at <b><a
                            href="mailto:contact@intmatedtech.com">contact@intmatedtech.com</a></b>.
                </p>

                <p>By using our website and services, you consent to the terms outlined in this <b>Privacy Policy</b>.
                    Thank
                    you for
                    trusting INTMAT EdTech with your privacy.</p>
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