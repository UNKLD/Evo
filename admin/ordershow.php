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

            <?php
            include('../handlers/connect.php');

            $id = $_GET['pro_id'];
            $sql = "SELECT * from orders WHERE id='$id'";
            $results = $connect->query($sql);

            $final = $results->fetch_assoc();


            ?>

            <h3> Customer Email : <?php echo $final['customer_email'] ?> </h3>
            <hr><br>

            <h3> Orderd products : <?php echo $final['products'] ?> </h3>
            <hr><br>

            <h3> Total : $<?php echo $final['total'] ?> </h3>
            <hr><br>

            <h3> Address : <?php echo $final['address'] ?> </h3>
            <hr><br>

          </div>




          <div class="col-sm-3">

          </div>
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