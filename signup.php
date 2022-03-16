<!DOCTYPE html>
<html lang="en">
<?php include("includes/head.php");
include("handlers/session.php");

?>
<title>Signup</title>
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">

<body>

    <div class="super_container">

        <!-- Header -->

        <?php include("includes/header.php") ?>
        <!-- Menu -->

        <?php include("includes/menu.php") ?>

        <!-- home -->

        <div class="home">
            <div class="home_container">
                <div class="home_background" style="background-image:url(images/contact.jpg); border-radius: 15px;"></div>
                <div class="home_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_content">
                                    <div class="breadcrumbs">
                                        <ul>
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="signin.php">Login</a></li>
                                            <li>
                                                <p>Register</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact -->

        <div class="contact">
            <div class="container">
                <div class="row">
                    <!-- Register -->
                    <div class="col-lg-8 contact_col">
                        <div class="get_in_touch">
                            <h2 class="section_title" style="margin-top: 50px; text-align: center;">Register</h2>
                            <div class="contact_form_container">
                                <form action="handlers/signup_handler.php" method="POST" style="margin-left: 100px;" id="contact_form" class="contact_form form-group">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <!-- Name -->
                                            <label for="contact_name">First Name</label>
                                            <input name="first_name" type="text" id="contact_name" class="contact_input form-control" required="required">
                                        </div>
                                        <div class="col-xl-6 last_name_col">
                                            <!-- Last Name -->
                                            <label for="contact_last_name">Last Name</label>
                                            <input name="last_name" type="text" id="contact_last_name" class="form-control contact_input" required="required">
                                        </div>
                                    </div>
                                    <div>
                                        <!-- Subject -->
                                        <label for="email">Email</label>
                                        <input name="email" type="email" id="email" class="form-control contact_input">
                                    </div>
                                    <div>
                                        <label for="password">Password</label>
                                        <input name="password" type="password" id="password" class="form-control contact_input" required="required" />
                                    </div>
                                    <button type="submit" class="button contact_button"><span>Register</span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php include("includes/footer.php") ?>

    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/greensock/TweenMax.min.js"></script>
    <script src="plugins/greensock/TimelineMax.min.js"></script>
    <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="plugins/greensock/animation.gsap.min.js"></script>
    <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="js/contact.js"></script>
</body>

</html>