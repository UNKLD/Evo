<!DOCTYPE html>
<html>
<?php
include('includes/session.php');
include('includes/head.php');
?>

<body class="hold-transition skin-green sidebar-mini">
  <div class="wrapper">

    <?php
    include('includes/header.php');
    include('includes/aside.php');


    ?>
    <!-- Left side column. contains the logo and sidebar -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Admin Dashboard
          <small>Control panel</small>
        </h1>

      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-sm-9">
            <a href="products.php">
              <button class="btn btn-success">Add Products</button>
            </a>
            <hr>
          </div>
          <div class="col-sm-9">
            <a href="category.php">
              <button class="btn btn-success">Add Categories</button>
            </a>
            <hr>
          </div>
          <div class="col-sm-9">
            <a href="orders.php">
              <button class="btn btn-warning">See All Orders</button>
            </a>
            <hr>
          </div>


      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php
    include('includes/footer.php');
    ?>
</body>

</html>