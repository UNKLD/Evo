<?php
include('../handlers/connect.php');
$newid = $_GET['del_id'];

$sql = "Delete from categories where id='$newid'";

if (mysqli_query($connect, $sql)) {
    header('location: categories.php');
} else {
    echo "Not Deleted";
}
