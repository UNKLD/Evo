<?php
$proid = $_POST['cart_id'];
$pro_name = $_POST['cart_name'];
session_start();
if (isset($_SESSION['cart'])) {
    $checker = array_column($_SESSION['cart'], 'item_name');
    if (in_array($_POST['cart_name'], $checker)) {
        $proid = $_POST['cart_id'];
        echo "<script>alert('Product Is Already In The Cart');
			window.location.href='product.php?pro_id=$proid&pro_name=$pro_name';
		</script>";
    } else {

        $count = count($_SESSION['cart']);
        $_SESSION['cart'][$count] = array('item_id' => $_POST['cart_id'], 'item_name' => $_POST['cart_name'], 'item_price' => $_POST['cart_price'], 'quantity' => $_POST['qty']);
        echo "<script>alert('Product Added');
			window.location.href='product.php?pro_id=$proid&pro_name=$pro_name';
	</script>";
    }
} else {
    $_SESSION['cart'][0] = array('item_id' => $_POST['cart_id'], 'item_name' => $_POST['cart_name'], 'item_price' => $_POST['cart_price'], 'quantity' => $_POST['qty']);
    echo "<script>alert('Product Added');
			window.location.href='product.php?pro_id=$proid&pro_name=$pro_name';
	</script>";
}

print_r($_SESSION['cart']);
