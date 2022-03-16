<!DOCTYPE html>
<html lang="en">
<title><?php echo $_POST['search-txt'] ?></title>

<?php include("includes/head.php") ?>

<link rel="stylesheet" type="text/css" href="styles/categories.css">
<link rel="stylesheet" type="text/css" href="styles/categories_responsive.css">


<body>

    <div class="super_container">

        <!-- Header -->

        <?php include("includes/header.php") ?>

        <!-- Menu -->

        <?php include("includes/menu.php") ?>

        <!-- Home -->
        <div class="home">
            <div class="home_container">
                <div class="home_background" style="background-image:url(images/categories.jpg); border-radius: 15px;"></div>
                <div class="home_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_content">
                                    <div class="home_title">Categories<span>.</span></div>
                                    <div class="breadcrumbs">
                                        <ul>
                                            <?php
                                            include("handlers/connect.php");
                                            $sql = "SELECT * FROM categories";
                                            $results = $connect->query($sql);
                                            while ($final = $results->fetch_assoc()) {
                                            ?>
                                                <li>
                                                    <a href="category.php?cat_id=<?php echo $final['id'] ?>&cat_name=<?php echo $final['name'] ?>">
                                                        <?php echo $final['name'] ?></a>
                                                </li>

                                            <?php }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Products -->
        <div class="row">
            <div class="col">
                <div class="product_grid">
                    <div class="products">
                        <div class="container">
                            <div class="row">
                                <div class="col">

                                    <div class="product_grid">
                                        <?php include("handlers/connect.php");
                                        $search = $_POST['search-txt'];
                                        $sql = "SELECT * FROM products where name LIKE '%{$search}%'";
                                        $results = $connect->query($sql);
                                        while ($final = $results->fetch_assoc()) {
                                        ?>
                                            <!-- Product -->
                                            <div class="product">
                                                <div class="product_image"><img src="<?php echo $final['picture'] ?>" alt="" width="220px" height="220px"></div>
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
                </div>
            </div>
        </div>

        <!-- Icon Boxes -->




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
    <script src="js/categories.js"></script>
</body>

</html>