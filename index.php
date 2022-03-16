<!DOCTYPE html>
<html lang="en">
<title>Evo. Electronics</title>
<?php include("includes/head.php") ?>
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">

<body>

	<div class="super_container">

		<!-- Header -->
		<?php include("includes/header.php") ?>


		<!-- Menu -->

		<?php include("includes/menu.php") ?>

		<!-- Home -->

		<?php include("includes/slider.php") ?>

		<!-- Ads -->

		<?php include("includes/ads.php") ?>

		<!-- Products -->

		<div class="products">
			<div class="container">
				<div class="row">
					<div class="col">
						<h3>Recently Added Products</h3>
						<hr>
						<div class="product_grid">
							<?php include("handlers/connect.php");

							$sql = "SELECT * FROM products ORDER BY `created_at` desc Limit 8";
							$results = $connect->query($sql);
							while ($final = $results->fetch_assoc()) {
							?>
								<!-- Product -->
								<div class="product">
									<div class="product_image"><a href="product.php?pro_id=<?php echo $final['id']; ?>&pro_name=<?php echo $final['name'] ?>  "><img src="<?php echo $final['picture'] ?>" alt="" width="220px" height="220px" style="border-radius: 15px;"></a></div>
									<div class="product_content">
										<div class="product_title"><a href="product.php?pro_id=<?php echo $final['id']; ?>&pro_name=<?php echo $final['name'] ?>  "><?php echo $final['name'] ?></a></div>
										<div class="product_price">$<?php echo $final['price'] ?></div>
									</div>
								</div>
							<?php
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Ad -->

		<?php include("includes/singleAd.php") ?>

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
	<script src="js/custom.js"></script>
</body>

</html>