<?php
session_start();

if(empty($_SESSION['adminemail'] AND $_SESSION['adminpassword'])){
	header('location: adminlogin.php');
}
