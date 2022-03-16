<?php

include("connect.php");
session_start();
$email = $_POST['email'];
$password = $_POST['password'];


$sql = "SELECT * FROM customers WHERE email= '$email'";
$results = $connect->query($sql);


$final = $results->fetch_assoc();

$_SESSION['email'] = $final['email'];
$_SESSION['firstname'] = $final['firstname'];
$_SESSION['lastname'] = $final['lastname'];
if ($email == $final['email'] and $password == $final['password']) {
    echo "<script>window.history.go(-2)</script>";
} else {
    echo "<script>
            alert('Email or Password is Incorrect');
            window.location.href='../signin.php';
        </script>";
}
