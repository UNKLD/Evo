<?php
include('handlers/connect.php');

if (isset($_POST['contact'])) {


	$email = $_POST['email'];
	$msg = $_POST['msg'];

	$sql = "INSERT INTO contact (email, msg) VALUES('$email','$msg')";

	if ($connect->query($sql)) {
		echo "<script>
	        alert('Thank you for contacting us! We will get back to you');
	        window.location.href='index.php';
	    </script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<?php include("includes/head.php") ?>
<title>Contact</title>
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">

<body>

	<div class="super_container">

		<!-- Header -->

		<?php include("includes/header.php") ?>

		<!-- Menu -->

		<?php include("includes/menu.php") ?>
		<!-- Home -->

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
											<li>
												<p>Contact</p>
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

					<!-- Get in touch -->
					<div class="col-lg-8 contact_col">
						<div class="get_in_touch">
							<div class="section_title">Get in Touch</div>
							<div class="section_subtitle">Say hello</div>
							<div class="contact_form_container">
								<form action="contact.php" method="POST" id="contact_form" class="contact_form">
									<div class="row">
										<div class="col-xl-6">
											<!-- Name -->
											<label for="contact_name">First Name*</label>
											<input type="text" id="contact_name" class="contact_input" required="required">
										</div>
										<div class="col-xl-6 last_name_col">
											<!-- Last Name -->
											<label for="contact_last_name">Last Name*</label>
											<input type="text" id="contact_last_name" class="contact_input" required="required">
										</div>
									</div>
									<div>
										<!-- Email -->
										<label for="contact_company">Email</label>
										<input name="email" type="email" id="contact_company" class="contact_input" required>
									</div>
									<div>
										<label for="contact_textarea">Message*</label>
										<textarea name="msg" id="contact_textarea" class="contact_input contact_textarea" required></textarea>
									</div>
									<button type="submit" name="contact" class="button contact_button"><span>Send Message</span></button>
								</form>
							</div>
						</div>
					</div>

					<!-- Contact Info -->
					<div class="col-lg-3 offset-xl-1 contact_col">
						<div class="contact_info">
							<div class="contact_info_section">
								<div class="contact_info_title">Marketing</div>
								<ul>
									<li>Phone: <span>+251 345 7953 32</span></li>
									<li>Name: <span>Robel Gedamu</span></li>
									<li>ID: <span>UU69486R</span></li><br>
									<li>Phone: <span>+251 345 7953 32</span></li>
									<li>Name: <span>Leul Damtew</span></li>
									<li>ID: <span>UU69327R</span></li><br>
									<li>Phone: <span>+251 345 7953 32</span></li>
									<li>Name: <span>Temesgen Mekonen</span></li>
									<li>ID: <span>UU69419R</span></li>
								</ul>
							</div>

							<div class="contact_info_section">
								<div class="contact_info_title">Information</div>
								<ul>
									<li>Phone: <span>+251 345 7953 32</span></li>
									<li>Name: <span>Bereket Awegchew</span></li>
									<li>ID: <span>UU69326R</span></li><br>
									<li>Phone: <span>+251 345 7953 32</span></li>
									<li>Name: <span>Kirubel Getachew</span></li>
									<li>ID: <span>UU69560R</span></li><br>
									<li>Phone: <span>+251 345 7953 3245</span></li>
									<li>Name: <span>Natnael Behailu</span></li>
									<li>ID: <span>UU69506R</span></li><br>
									<li>Phone: <span>+251 345 7953 32</span></li>
									<li>Name: <span>Ali Eshetu</span></li>
									<li>ID: <span>UU65453R</span></li>
								</ul>
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
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
	<script src="js/contact.js"></script>
</body>

</html>