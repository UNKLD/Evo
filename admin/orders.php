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

            $sql = "Select * from orders";;
            $results = $connect->query($sql);
            while ($final = $results->fetch_assoc()) { ?>

              <a href="ordershow.php?pro_id=<?php echo $final['id'] ?>">
                <h3><?php echo $final['customer_email'] ?>: <?php echo $final['phone'] ?></h3><br>
                <h3>Total: $<?php echo $final['total'] ?> </h3>
                <hr>

              </a>



              <a href="orderdelete.php?del_id=<?php echo $final['id'] ?>">
                <button class="btn btn-danger">Delete</button>
              </a>
              <hr>


            <?php }
            ?>





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