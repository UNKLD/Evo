
<?php
session_start();


if (isset($_POST['update'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['item_name'] == $_POST['item_name']) {
            $_SESSION['cart'][$key]['quantity'] = $_POST['qty'];
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            header('location: cart.php');
        }
    }
}
