<?php


include("connect.php");
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];

$ch = "SELECT * FROM customers WHERE email = '$email'";
$result = $connect->query($ch);
$final = $result->fetch_assoc();

if ($email == $final['email']) {
	echo "<script>
	        alert('You have already Regisered! Please login');
			window.history.go(-2);
	    </script>";
} else {


	$sql = "INSERT INTO customers (firstname, lastname, email, password) VALUES ('$fname','$lname','$email','$password')";
	if ($connect->query($sql)) {
		echo "<script>
		alert('Successfully Registered!  Please Login');
		window.history.go(-2);
		</script>
		";
	} else {
		echo "<script>
		alert('Something went wrong! please try again');
		window.history.go(-2);
		</script>
		";
	}
}
