<!DOCTYPE html>
<html lang="en">
<?php include("includes/head.php");
session_start();
if (isset($_SESSION['recent'])) {
	$checker = array_column($_SESSION['recent'], 'item_id');
	if (in_array($_GET['pro_id'], $checker)) {
	} else {
		$count = count($_SESSION['recent']);
		$_SESSION['recent'][$count] = array('item_id' => $_GET['pro_id']);
	}
} else {
	$_SESSION['recent'][0] = array('item_id' => $_GET['pro_id']);
}


?>
<title><?php echo $_GET['pro_name'] ?></title>
<link rel="stylesheet" type="text/css" href="styles/product.css">
<link rel="stylesheet" type="text/css" href="styles/product_responsive.css">
<style>
	#btn {
		width: 100%;
		font-weight: bold;
		font-size: 20px;
	}

	#btn:hover {
		color: white;
	}

	#quantity_input::-webkit-outer-spin-button,
	#quantity_input::-webkit-inner-spin-button {
		-webkit-appearance: none;
	}
</style>

<body>

	<div class="super_container">

		<!-- Header -->

		<?php include("includes/header.php") ?>

		<!-- Menu -->

		<?php include("includes/menu.php") ?>

		<!-- Home Ad -->
		<div class="container" style="width: 55px; height: 55px;">
		</div>
		<!-- Product Details -->
		<div class="product_details">
			<div class="container">
				<div class="row details_row">
					<?php include("handlers/connect.php");
					$pro_id = $_GET['pro_id'];
					$sql = "SELECT * FROM products WHERE id='$pro_id'";
					$results = $connect->query($sql);
					$final = $results->fetch_assoc();
					?>
					<!-- Product Image -->
					<div class="col-lg-6">
						<div class="details_image">
							<div class="details_image_large"><img src="<?php echo $final['picture'] ?>" alt="">
							</div>
						</div>
					</div>

					<!-- Product Content -->
					<div class="col-lg-6">
						<div class="details_content">
							<form action="carthandler.php" method="POST">
								<div class="details_name"><?php echo $final['name'] ?></div>

								<div class="details_price">$<?php echo $final['price'] ?></div>

								<!-- In Stock -->
								<div class="in_stock_container">
									<div class="availability">Availability:</div>
									<span>In Stock</span>
								</div>
								<div class="details_text">
									<p><?php echo $final['description'] ?></p>
								</div>

								<!-- Product Quantity -->
								<div class="product_quantity_container">
									<div class="product_quantity clearfix">
										<span>Qty</span>
										<input name="qty" id="quantity_input" type="number" pattern="[0-9]*" value="1" min="1">
										<div class="quantity_buttons">
											<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
											<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
										</div>
									</div>
									<input type="hidden" name="cart_id" value=<?php echo $final['id'] ?>>
									<input type="hidden" name="cart_name" value=<?php echo $final['name'] ?>>
									<input type="hidden" name="cart_price" value=<?php echo $final['price'] ?>>

									<input type="hidden" name="submit" type="submit" value="Submit">

									<div class="button cart_button"><a><button id="btn" type="submit">Add to cart</button></a></div>
								</div>
							</form>


							<!-- Share -->
							<div class="details_share">
								<span>Share:</span>
								<ul>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- <div class="row description_row">
					<div class="col">
						<div class="description_title_container">
							<div class="description_title">Description</div>
							<div class="reviews_title"><a href="#">Reviews <span>(1)</span></a></div>
						</div>
						<div class="description_text">
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
						</div>
					</div>
				</div> -->
			</div>
		</div>

		<!-- Products -->

		<div class="products">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="products_title">Related Products</div>
					</div>
				</div>
				<div class="row">
					<div class="col">

						<div class="product_grid">

							<!-- Product -->
							<?php include("handlers/connect.php");
							$catid = $final['category_id'];
							$sql = "SELECT * FROM products WHERE category_id='$catid'";
							$results = $connect->query($sql);
							while ($final = $results->fetch_assoc()) {
							?>
								<div class="product">
									<div class="product_image"><a href="product.php?pro_id=<?php echo $final['id']; ?>&pro_name=<?php echo $final['name'] ?>  "><img src="<?php echo $final['picture'] ?>" alt="" width="220px" height="220px"></a></div>
									<div class="product_content">
										<div class="product_title"><a href="product.php?pro_id=<?php echo $final['id'] ?>&pro_name=<?php echo $final['name'] ?>  "><?php echo $final['name'] ?></a></div>
										<div class="product_price">$<?php echo $final['price'] ?></div>
									</div>
								</div>

							<?php } ?>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Newsletter -->

		<?php include("includes/newsletter.php") ?>

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
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="js/product.js"></script>
</body>

</html>