<div class="menu menu_mm trans_300">
    <div class="menu_container menu_mm">
        <div class="page_menu_content">

            <div class=" menu_mm">
                <form action="search.php" method="POST">
                    <input name="search-txt" type="search" required="required" class="page_menu_search_input menu_mm" placeholder="Search for products...">
                </form>
            </div>
            <ul class="page_menu_nav menu_mm">
                <li class="page_menu_item has-children menu_mm">
                    <a href="index.php">Home<i class="fa fa-angle-down"></i></a>
                    <ul class="page_menu_selection menu_mm">
                        <li class="page_menu_item menu_mm"><a href="categories.php">Products<i class="fa fa-angle-down"></i></a></li>
                        <li class="page_menu_item menu_mm"><a href="cart.php">Cart<i class="fa fa-angle-down"></i></a></li>
                    </ul>
                </li>
                <li class="page_menu_item has-children menu_mm">
                    <a href="categories.php">Categories<i class="fa fa-angle-down"></i></a>
                    <ul class="page_menu_selection menu_mm">
                        <?php
                        include("handlers/connect.php");
                        $sql = "SELECT * FROM categories";
                        $results = $connect->query($sql);
                        while ($final = $results->fetch_assoc()) {
                        ?>
                            <li class="page_menu_item menu_mm"> <a href="category.php?cat_id=<?php echo $final['id'] ?>&cat_name=<?php echo $final['name'] ?>">
                                    <?php echo $final['name'] ?></a></a></li>
                        <?php }
                        ?>
                    </ul>
                </li>
                <li class="page_menu_item menu_mm"><a href="contact.php">Contact<i class="fa fa-angle-down"></i></a></li>
                <?php if (!isset($_SESSION['email'])) {
                    echo "<li class='page_menu_item menu_mm'><a href='signin.php'>Login</a></li>
                                            <li class='page_menu_item menu_mm'><a href='signup.php'>Register</a></li>";
                } else {
                    echo "<li class='page_menu_item menu_mm'><a href='handlers/signout.php'>Signout</a></li>";
                } ?>
            </ul>
        </div>
    </div>

    <div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>

    <div class="menu_social">
        <ul>
            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        </ul>
    </div>
</div>