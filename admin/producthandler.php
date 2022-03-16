<?php
include("../handlers/connect.php");
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$category = $_POST['category'];


$target = "uploads/";
$file_path = $target . basename($_FILES['file']['name']);
$file_name = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];
$file_store = "../uploads/" . $file_name;

move_uploaded_file($file_tmp, $file_store);


function sluify($str, $delimiter = '-')
{
    $slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $str))))), $delimiter));
    return $slug;
}

$slug = sluify($name);



$sql = "INSERT INTO products(name,price,picture,description,category_id) VALUES('$slug','$price','$file_path','$description','$category')";

$connect->query($sql);

header('location: productsshow.php');
