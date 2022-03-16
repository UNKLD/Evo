<!DOCTYPE html>
<html lang="en">
<?php
include("includes/head.php")
?>

<link rel="stylesheet" type="text/css" href="styles/cart.css">
<link rel="stylesheet" type="text/css" href="styles/cart_responsive.css">

<title>Cart</title>

<body>

	<div class="super_container">

		<!-- Header -->

		<?php include("includes/header.php") ?>
		<!-- Menu -->

		<?php include("includes/menu.php") ?>

		<!-- Home -->

		<div class="home">
			<div class="home_container">
				<div class="home_background" style="background-image:url(images/cart.jpg); border-radius: 15px;"></div>
				<div class="home_content_container">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="home_content">
									<div class="breadcrumbs">
										<ul>
											<li><a href="index.php">Home</a></li>
											<li><a href="categories.php">All Products</a></li>
											<li>
												<p>Shopping Cart</p>
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

		<!-- Cart Info -->
		<div class="container">
			<?php
			include("handlers/connect.php");
			if (isset($_SESSION['recent'])) {
				foreach ($_SESSION['recent'] as $key => $value) {
					$id = $value['item_id'];
					$sql = "SELECT * FROM products WHERE id='$id'";
					$results = $connect->query($sql);
				}
			}
			?>
		</div>

		<div class="cart_info">
			<div class="container">
				<div class="row">
					<div class="col">
						<!-- Column Titles -->
						<div class="cart_info_columns clearfix">
							<div class="cart_info_col cart_info_col_product">Product</div>
							<div class="cart_info_col cart_info_col_price">Price</div>
							<div class="cart_info_col cart_info_col_quantity">Quantity</div>
							<div class="cart_info_col cart_info_col_total">Total</div>
						</div>
					</div>
				</div>
				<div class="row cart_items_row">
					<div class="col">

						<?php
						$total = 0;
						$itemTotal = 0;
						if (isset($_SESSION['cart'])) {
							foreach ($_SESSION['cart'] as $key => $value) {
								$itemTotal = $value['item_price'] * $value['quantity'];
								$total = $total + $value['item_price'] * $value['quantity'];


						?>

								<!-- Cart Item -->
								<div class="cart_item d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
									<!-- Name -->
									<div class="cart_item_product d-flex flex-row align-items-center justify-content-start">

										<form action="cartremove.php" method="POST">
											<button class="btn btn-sm btn-outline-danger" name="remove">Remove</button>
											<input type="hidden" name="item_name" value=<?php echo $value['item_name'] ?> />
										</form>

										<div class="cart_item_name_container">
											<div class="cart_item_name">
												<a href="product.php?pro_id=<?php echo $value['item_id'] ?>"><?php echo $value['item_name'] ?>
												</a>
											</div>
										</div>
									</div>
									<!-- Price -->
									<div class="cart_item_price">$<?php echo $value['item_price'] ?></div>
									<!-- Quantity -->
									<!-- <div class="cart_item_quantity">
										<div class="product_quantity_container">
											<div class="product_quantity clearfix">
												<input disabled id="quantity_input" name="quantity" type="text" pattern="[0-9]*" value=<?php echo $value['quantity'] ?> />
												<span>Qty</span>
											</div>
										</div>
									</div> -->
									<div class="cart_item_quantity">
										<form action="cartupdate.php" method="POST">
											<div class="product_quantity_container">
												<div class="product_quantity clearfix">
													<span style="margin-right: 5px;">Qty</span>
													<input style="width: 50px;" name="qty" class="quantity_input" type="number" pattern="[0-9]*" min="1" value=<?php echo $value['quantity'] ?>>

													<input type="hidden" name="item_name" value="<?php echo $value['item_name'] ?>">
												</div>
											</div>
									</div>
									<button type="submit" class="btn btn-sm btn-outline-success" name="update">Update</button>
									</form>


									<!-- Total -->
									<div class="cart_item_total">$<?php echo $itemTotal ?></div>
								</div>

						<?php }
						} ?>

					</div>
				</div>
				<div class="row row_cart_buttons">
					<div class="col">
						<div class="cart_buttons d-flex flex-lg-row flex-column align-items-start justify-content-start">
							<div class="button continue_shopping_button">
								<a href="categories.php">Continue shopping</a>
							</div>
							<div class="cart_buttons_right ml-lg-auto">
								<div class="button clear_cart_button">
									<a href="cartclear.php">Clear cart</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row row_extra">
					<div class="col-lg-4">

					</div>

					<div class="col-lg-6 offset-lg-2">
						<div class="cart_total">
							<div class="section_title">Cart total</div>
							<div class="section_subtitle">Final info</div>
							<div class="cart_total_container">
								<ul>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_total_title">Subtotal</div>
										<div class="cart_total_value ml-auto">$<?php echo $total ?></div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_total_title">Shipping</div>
										<div class="cart_total_value ml-auto">Free</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_total_title">Total</div>
										<div class="cart_total_value ml-auto">$<?php echo $total ?></div>
									</li>
								</ul>
							</div>

							<?php if (!isset($_SESSION['email'])) {
								echo "<div class='section_title' style=color: red;'>Please Login to checkout </div>";
							} elseif (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) {

								echo "<div class='section_title'>Cart is Empty </div>";
							} else {
								echo "<div class='button checkout_button'>
										<a href='checkout.php'>Proceed to checkout</a></div>";
							}

							?>

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
	<script src="js/cart.js"></script>
</body>

</html>