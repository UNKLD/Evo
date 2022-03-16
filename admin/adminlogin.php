<?php
session_start();
include('includes/head.php');

if (isset($_POST['login'])) {

  include('../handlers/connect.php');



  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "SELECT * from admins Where username='$email' AND password='$password'";
  $results = $connect->query($sql);
  $final = $results->fetch_assoc();

  $_SESSION['adminemail'] = $final['username'];
  $_SESSION['adminpassword'] = $final['password'];



  if ($email = $final['username'] and $password = $final['password']) {
    header('location: index.php');
  } else {
    header('location: adminlogin.php');
  }
}
?>

<div class="content-wrapper" style="background-color: white;">
  <div class="col-sm-9" style="margin-top: 60px;">

    <div class="box box-success">
      <div class="box-header with-border">
        <h3 class="box-title">Admin Login</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form class="form-horizontal" action="adminlogin.php" method="POST">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
          <input type="email" class="form-control" name="email" placeholder="Email">
        </div>
        <br>

        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-key"></i></span>
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <br>

        <div class="box-footer">
          <button type="submit" class="btn btn-success btn-lg" name="login">Log in</button>
        </div>
        <!-- /.box-footer -->
      </form>

    </div>
  </div>
</div>