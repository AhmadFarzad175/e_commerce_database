<?php include('../layouts/header.php');?>

<?php include('../layouts/top_header.php');?>

<?php include('../layouts/sidebar.php');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Customer Management</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">create customer</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">cusmtomer management</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->






              <form action="../config/createCustomer.php" method="post" enctype="multipart/form-data">
                <div class="card-body">



                  <div class="form-group">
                    <label for="customerName">Customer Name</label>
                    <input type="text" name="customerName" class="form-control" id="customerName" placeholder="Cusmtoer name">
                  </div>



                  <div class="form-group">
                    <label for="phone">phone </label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone name">
                  </div>

                  <div class="form-group" >
                    <label for="age">Age </label>
                    <input type="number" name="age" class="form-control" id="age" placeholder="Age name">
                  </div>


                  <div class="form-group">
                    <label for="user_name">User name</label>
                    <input type="text" name="user_name" class="form-control" id="user_name" placeholder="User name">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="">
                  </div>

                  <div class="form-group">
                        <label>Gender</label>
                        <select class="form-control" name="Gender">
                          <option value= "Male">Male</option>
                          <option value= "Fmale">Fmale</option>
                          <option value= "Nothing">Nothing</option>
                        </select>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

<?php include('../layouts/footer.php');?>