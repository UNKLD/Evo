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
                    <div class="col-sm-3">
                    </div>

                    <div class="col-sm-6">
                        <form role="form" action="cathandler.php" method="post">
                            <h1>Add Categories</h1>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <input type="text" class="form-control" id="category" placeholder="Enter category Name" name="name">
                                </div>

                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
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