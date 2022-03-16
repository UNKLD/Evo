<!DOCTYPE html>
<html lang="en">
<title>Checkout</title>

<?php include("includes/head.php");
session_start();
if (empty($_SESSION['email']) || !isset($_SESSION['cart'])|| count($_SESSION['cart']) == 0) {
	header('location: cart.php');
}else{
?>
<style>
	#btn {
		width: 100%;
		font-weight: bold;
		font-size: 20px;
	}

	#btn:hover {
		color: white;
	}
</style>
<link rel="stylesheet" type="text/css" href="styles/checkout.css">
<link rel="stylesheet" type="text/css" href="styles/checkout_responsive.css">

<body>

	<div class="super_container">

		<!-- Header -->

		<?php include("includes/header.php") ?>
		<!-- Menu -->

		<?php include("includes/menu.php") ?>

		<!-- Home -->

		<div class="home">
			<div class="home_container">
				<div class="home_background" style="background-image:url(images/cart.jpg)"></div>
				<div class="home_content_container">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="home_content">
									<div class="breadcrumbs">
										<ul>
											<li><a href="index.php">Home</a></li>
											<li><a href="cart.php">Shopping Cart</a></li>
											<li>
												<p>Checkout</p>
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

		<!-- Checkout -->

		<div class="checkout">
			<div class="container">
				<div class="row">

					<!-- Billing Info -->
					<div class="col-lg-6">
						<div class="billing checkout_section">
							<div class="section_title">Billing Address</div>
							<div class="section_subtitle">Enter your address info</div>
							<div class="checkout_form_container">
								<form action="orderhandler.php" method="POST" id="checkout_form" class="checkout_form">
									<div class="row">
										<div class="col-xl-6">
											<!-- Name -->
											<label for="checkout_name">First Name*</label>
											<input type="text" name="fname" id="checkout_name" class="checkout_input" required="required" value=<?php echo $_SESSION['firstname'] ?>>
										</div>
										<div class="col-xl-6 last_name_col">
											<!-- Last Name -->
											<label for="checkout_last_name">Last Name*</label>
											<input name="lname" type="text" id="checkout_last_name" class="checkout_input" required="required" value=<?php echo $_SESSION['lastname'] ?>>
										</div>
									</div>

									<div>
										<!-- Country -->
										<label for="checkout_country">Country*</label>
										<select name="checkout_country" id="checkout_country" class="dropdown_item_select checkout_input" require="required">
											<option>Ethiopia</option>
										</select>
									</div>
									<div>
										<!-- Address -->
										<label for="checkout_address">Address*</label>
										<input name="address" type="text" id="checkout_address" class="checkout_input" required="required">

									</div>

									<!-- Phone no -->
									<div>
										<label for="checkout_phone">Phone no*</label>
										<input name="phone" type="phone" id="checkout_phone" class="checkout_input" required="required">
									</div>
									<div>
										<!-- Email -->
										<label for="checkout_email">Email Address*</label>
										<input name="email" type="email" id="checkout_email" class="checkout_input" required="required" value=<?php echo $_SESSION['email'] ?>>
									</div>
									<div class="checkout_extra">
										<div>
											<input type="checkbox" id="checkbox_terms" name="regular_checkbox" class="regular_checkbox" checked="checked">
											<label for="checkbox_terms"><img src="images/check.png" alt=""></label>
											<span class="checkbox_title">Terms and conditions</span>
										</div>
									</div>

							</div>
						</div>
					</div>

					<!-- Order Info -->

					<div class="col-lg-6">
						<div class="order checkout_section">
							<div class="section_title">Your order</div>
							<div class="section_subtitle">Order details</div>

							<!-- Order details -->
							<div class="order_list_container">
								<div class="order_list_bar d-flex flex-row align-items-center justify-content-start">
									<div class="order_list_title">Product</div>
									<div class="order_list_value ml-auto">Total</div>
								</div>
								<?php
								$total = 0;
								$products = "";
								if (isset($_SESSION['cart'])) {
									foreach ($_SESSION['cart'] as $key => $value) {
										$total = $total + $value['item_price'] * $value['quantity'];
										$name = $value['item_name'];
										$products = "$products $name, ";
								?>
										<ul class="order_list">
											<li class="d-flex flex-row align-items-center justify-content-start">
												<div class="order_list_title"><?php echo $value['item_name']; ?></div>

												<div class="order_list_value ml-auto">$<?php echo $value['item_price'] * $value['quantity'] ?></div>
											</li>
									<?php }
								} ?>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="order_list_title">Subtotal</div>
										<div class="order_list_value ml-auto">$<?php echo $total ?></div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="order_list_title">Shipping</div>
										<div class="order_list_value ml-auto">Free</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="order_list_title">Total</div>
										<div class="order_list_value ml-auto">$<?php echo $total ?></div>
									</li>
										</ul>
							</div>

							<!-- Payment Options -->
							<div class="payment">
								<div class="payment_options">
									<label class="payment_option clearfix">Paypal
										<input value="paypal" name="radio" type="radio" ">
										<span class=" checkmark"></span>
									</label>
									<label class="payment_option clearfix">Cash on delivery
										<input type="radio" value="cash" name="radio">
										<span class="checkmark"></span>
									</label>
								</div>
							</div>

							<input type="hidden" name="total" value=<?php echo $total; ?>>
							<textarea hidden name="products"><?php echo $products; ?></textarea>

							<div class="button order_button">
								<a>
									<button type="submit" id="btn">
										Place Order</button></a>
							</div>
							</form>
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
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="js/checkout.js"></script>
</body>
<?php } ?>
</html>