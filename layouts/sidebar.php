  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../assets/images/download.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">E Commerce</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                User
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../users/listuser.php" class="nav-link">
                  <i class="nav-icon fas fa-layer-group"></i>
                  <p>lists</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../users/createuser.php" class="nav-link">
                  <i class="nav-icon fa fa-plus"></i>
                  <p>create</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Customer
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../users/listcustomer.php" class="nav-link">
                  <i class="nav-icon fas fa-layer-group"></i>
                  <p>lists</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../users/createCustomer.php" class="nav-link">
                  <i class="nav-icon fa fa-plus"></i>
                  <p>create</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-mobile"></i>
              <p>
                Product
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../product/listproducts.php" class="nav-link">
                  <i class="nav-icon fas fa-layer-group"></i>
                  <p>lists</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../product/createproduct.php" class="nav-link">
                  <i class="nav-icon fa fa-plus"></i>
                  <p>create</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-search-dollar"></i>
              <p>
                Orders
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../orders/listOrders.php" class="nav-link">
                  <i class="nav-icon fas fa-layer-group"></i>
                  <p>lists</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../orders/createOrder.php" class="nav-link">
                  <i class="nav-icon fa fa-plus"></i>
                  <p>create</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-wallet"></i>
              <p>
                Sell
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../sells/listsells.php" class="nav-link">
                  <i class="nav-icon fas fa-layer-group"></i>
                  <p>lists</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../sells/createsells.php" class="nav-link">
                  <i class="nav-icon fa fa-plus"></i>
                  <p>create</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>