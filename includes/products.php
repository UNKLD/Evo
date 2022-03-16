<div class="products">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="product_grid">

                </div>
                <!-- recently visited products -->
                <h3>Recent:</h3>
                <hr>
                <div class="product_grid">

                    <?php include("handlers/connect.php");
                    if (isset($_SESSION['recent'])) {
                        foreach (array_slice(array_reverse($_SESSION['recent']), 0, 4) as $key => $value) {
                            $id = $value['item_id'];
                            $sql = "SELECT * FROM products WHERE id='$id'";
                            $results = $connect->query($sql);
                            while ($final = $results->fetch_assoc()) {
                    ?>
                                <!-- Product -->
                                <div class="product">
                                    <div class="product_image"><a href="product.php?pro_id=<?php echo $final['id']; ?>&pro_name=<?php echo $final['name'] ?>  "><img src="<?php echo $final['picture'] ?>" alt="" width="100px" height="100px" /></a></div>
                                    <div class="product_content">
                                        <div class="product_title"><a href="product.php?pro_id=<?php echo $final['id']; ?>&pro_name=<?php echo $final['name'] ?>  "><?php echo $final['name'] ?></a></div>
                                        <div class="product_price">$<?php echo $final['price'] ?></div>
                                    </div>
                                </div>
                    <?php
                            }
                        }
                    }
                    ?>
                </div>
                <!-- All products list -->
                <h2>All Products:</h2>
                <hr>
                <div class="product_grid">
                    <?php include("handlers/connect.php");

                    $sql = "SELECT * FROM products";
                    $results = $connect->query($sql);
                    while ($final = $results->fetch_assoc()) {
                    ?>
                        <!-- Product -->
                        <div class="product">
                            <div class="product_image"><a href="product.php?pro_id=<?php echo $final['id']; ?>&pro_name=<?php echo $final['name'] ?>  "><img src="<?php echo $final['picture'] ?>" alt="" width="220px" height="220px"></a></div>
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