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
                        <hr>

                        <?php
                        include('../handlers/connect.php');

                        $sql = "Select * from subscribers";;
                        $results = $connect->query($sql);

                        while ($final = $results->fetch_assoc()) { ?>

                            <h3><?php echo $final['email'] ?></h3><br>
                            <hr>
                        <?php }
                        ?>
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