<?php
  error_reporting(0);
include("handlers/connect.php");

$email = $_POST['email'];
$ch = "SELECT * FROM subscribers WHERE email = '$email'";
$result = $connect->query($ch);
$final = $result->fetch_assoc();

if ($email == $final['email']) {
	echo "<script>
	        alert('You have already subscribed');
	        window.history.back();
	    </script>";
} else {

	$sql = "INSERT INTO subscribers (email) VALUES ('$email')";

	if ($connect->query($sql)) {
		echo "<script>
	        alert('Thank You for subscribing');
	        window.history.back();
	    </script>";
	} else {
		echo "<script>
	        alert('Something went wrong please try again');
	        window.history.back();
	    </script>";
	}
}
