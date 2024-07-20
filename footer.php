<!-- Start Footer Section -->
<footer class="footer-section">
    <div class="container relative">
        <div class="sofa-img">
            <img src="assets/img/final-removebg-preview.png" alt="Image" class="img-fluid" />
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="subscription-form">
                    <?php 
        if (isset($_GET["error"])) {
          if ($_GET["error"] == "emptynewsletterinput") {
            echo "<p>Fill in the Name and Email and submit!!</p>";
          }
          else if ($_GET["error"] == "invalidemail") {
            echo "<p>Choose a proper Email</p>";
          }
          else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong, Try again!!</p>";
          }
          else if ($_GET["error"] == "none") {
            echo "<p>Thank you for Subscribing!!</p>";
          }
        }
        ?>
                    <h3 class="d-flex align-items-center">
                        <span class="me-1"><img src="images/envelope-outline.svg" alt="Image"
                                class="img-fluid" /></span><span>Subscribe to Newsletter</span>
                    </h3>

                    <form id="form" action="https://api.web3forms.com/submit" method="POST" class="row g-3">
                        <div class="col-auto">
                            <input type="text" name="NewsLetterName" class="form-control"
                                placeholder="Enter your name" />
                        </div>
                        <div class="col-auto">
                            <input type="email" name="NewsLetterEmail" class=" form-control"
                                placeholder="Enter your email" />
                        </div>
                        <!-- <input type="hidden" name="_autoresponse" value="Thank you for contacting!!">
                        <input type="hidden" name="_template" value="table"> -->
                        <input type="hidden" name="access_key" value="188af119-6175-4200-a0b6-663382d7eac1">
                        <div class="h-captcha" data-captcha="true"></div>
                        <input type="hidden" name="from_name" value="INTMATEdTech Newsletter">
                        <div class="col-auto">
                            <button class="btn btn-primary" name="submit">
                                <span class="fa fa-paper-plane"></span>
                            </button>
                        </div>
                        <!-- <div>
                                    <input type="submit" name="submit" value="submit">
                                </div> -->
                    </form>
                </div>
            </div>
        </div>

        <div class="row g-5 mb-5">
            <div class="col-lg-4">
                <div class="mb-4 footer-logo-wrap">
                    <a href="index.php" class="footer-logo">ɪɴᴛᴍᴀᴛ ᴇᴅᴛᴇᴄʜ<span>.</span></a>
                </div>
                <p class="mb-4">
                    Empowering learners, inspiring futures - INTMAT EdTech is your
                    partner in educational excellence, offering innovative solutions
                    tailored to your success
                </p>

                <ul class="list-unstyled custom-social">
                    <li>
                        <a href="https://www.facebook.com/profile.php?id=100092325945516"><span
                                class="fa fa-brands fa-facebook-f"></span></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/intmatedtech"><span class="fa fa-brands fa-twitter"></span></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/intmatedtech/"><span
                                class="fa fa-brands fa-instagram"></span></a>
                    </li>
                    <li>
                        <a href="/"><span class="fa fa-brands fa-linkedin"></span></a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-8">
                <div class="row links-wrap">
                    <div class="col-6 col-sm-6 col-md-3">
                        <ul class="list-unstyled">
                            <li><a href="about.php">About us</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li><a href="contact.php">Contact us</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-sm-6 col-md-3">
                        <ul class="list-unstyled">
                            <li><a href="contact.php">Support</a></li>
                            <li><a href="#">Knowledge base</a></li>
                            <li><a href="#">Live chat</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-sm-6 col-md-3">
                        <ul class="list-unstyled">
                            <li><a href="career.php">Career Hub</a></li>
                            <li><a href="courses.php">Our Courses</a></li>
                            <li><a href="privacy.php">Privacy Policy</a></li>
                            <li><a href="termsCondition.php">Terms &amp; Conditions</a></li>

                        </ul>
                    </div>

                    <div class="col-6 col-sm-6 col-md-3">
                        <ul class="list-unstyled">
                            <!-- <li><a href="#">JavaScript</a></li> -->
                            <li><a href="courses.php#NEET">NEET Courses</a></li>
                            <li>
                                <a href="courses.php#GovExams">Government Exams</a>
                            </li>
                            <li><a href="courses.php#KCET">KCET Courses</a></li>
                            <li>
                                <a href="courses.php">Competative Exams</a>
                            </li>
                            <li>
                                <a href="courses.php">Foreign MS Training - TOEFL</a>
                            </li>
                            <li><a href="courses.php">Corporate Training</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-top copyright">
            <div class="row pt-4">
                <div class="col-lg-6">
                    <p class="mb-2 text-center text-lg-start terms">
                        Copyright &copy;
                        <script>
                        document.write(new Date().getFullYear());
                        </script>
                        . All Rights Reserved. &mdash; INTMAT EdTech
                    </p>
                </div>

                <div class="col-lg-6 text-center text-lg-end">
                    <ul class="list-unstyled d-inline-flex ms-auto">
                        <li class="me-4">
                            <a href="termsCondition.php">Terms &amp; Conditions</a>
                        </li>
                        <li><a href="privacy.php">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Section -->

<script>
window.onload = function() {
    // Reset the form fields when the page loads
    document.getElementById("form").reset();
};
</script>