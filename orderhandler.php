<?php
session_start();
include("handlers/connect.php");
$email = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$total = $_POST['total'];
$products = $_POST['products'];

$paypal = $_POST['radio'];
if ($paypal == "paypal") {
    header("location: handlers/paypal.php?total=$total ");
    unset($_SESSION['cart']);
} else {
    $sql = "INSERT INTO orders (customer_email, firstname, lastname, address, phone, products, total, pay_method) VALUES ('$email','$fname','$lname','$address','$phone','$products','$total','Cash on delivery')";

    if ($connect->query($sql)) {
        echo "<script>
        alert('Order Successfully Placed');
        window.location.href='cartclear.php';
    </script>";
    } else {
        echo "<script>
        alert('Something went wrong please try again');
        window.location.href='checkout.php';
    </script>";
    }
}
