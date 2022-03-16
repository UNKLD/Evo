<?php

session_start();

if (isset($_SESSION['email'])) {
    unset($_SESSION['email']);
    echo "<script>window.history.go(-1)</script>";
}