<?php
session_start();
if (isset($_SESSION['cart'])) {
	unset($_SESSION['cart']);
	echo "<script>
	alert('Cart Cleared');
	window.location.href='categories.php';
	</script>";
} else {
	header('location: cart.php');
}
