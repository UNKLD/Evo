<?php
include("../handlers/connect.php");
$category = $_POST['name'];

$sql = "INSERT INTO categories(name) VALUES('$category')";

$connect->query($sql);
header('location: categories.php');