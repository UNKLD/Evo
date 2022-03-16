<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->

    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/user.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $_SESSION['adminemail'] ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <hr>
    <!-- search form -->
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="active treeview">
      <li>
        <a href="index.php">
          <i class="fa fa-server"></i> <span>Home</span>

        </a>
      </li>
      <li>
        <a href="categories.php">
          <i class="fa fa-gear"></i> <span>Categories</span>

        </a>
      </li>
      <li>
        <a href="productsshow.php">
          <i class="fa fa-gear"></i> <span>Products</span>

        </a>
      </li>
      <li>
        <a href="orders.php">
          <i class="fa fa-gear"></i> <span>Orders</span>

        </a>
      </li>

      <li>
        <a href="subs.php">
          <i class="fa fa-gear"></i> <span>Subscribers</span>

        </a>
      </li>

      <li>
        <a href="logout.php">
          <i class="fa fa-gear"></i> <span>Sign Out</span>

        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>