<?php
// Include database connection
include('../config/connect.php');

// Get user ID from URL parameter
$customer_id = $_GET['id'];

// Fetch user data from the database
$sql = "SELECT * FROM customer WHERE customer_id = $customer_id";
$result = mysqli_query($conn, $sql);
$customer = mysqli_fetch_assoc($result);

// Close database connection
mysqli_close($conn);
?>

<?php include('../layouts/header.php'); ?>
<?php include('../layouts/top_header.php'); ?>
<?php include('../layouts/sidebar.php'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User Management</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Update User</li>
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
                            <h3 class="card-title">User Management</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->



                        <form action="../config/updateCustomer.php" method="post" enctype="multipart/form-data">
                <div class="card-body">







              












                  <div class="form-group">
                    <label for="customerName">Customer Name</label>
                    <input type="text" name="customerName" class="form-control" id="customerName" placeholder="Cusmtoer name"  value="<?php echo $customer['customer_name']; ?>">
                  </div>



                  <div class="form-group">
                    <label for="phone">phone </label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone name"  value="<?php echo $customer['phone']; ?>">
                  </div>





                  <div class="form-group" >
                    <label for="age">Age </label>
                    <input type="number" name="age" class="form-control" id="age" placeholder="Age " value="<?php echo $customer['age']; ?>">
                  </div>






                  


                  <div class="form-group">
                    <label for="user_name">User name</label>
                    <input type="text" name="user_name" class="form-control" id="user_name" placeholder="User " value="<?php echo $customer['user_name']; ?>">
                  </div>







                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="" value="<?php echo $customer['password']; ?>">
                  </div>


                



                      <div class="form-group">
                        <label>Gender</label>
                        <select class="form-control" name="Gender">
                          <option value= "Male" <?php if ($customer['gender'] == 'Male') echo 'selected'; ?>>Male</option>
                          <option value= "Fmale" <?php if ($customer['gender'] == 'Fmale') echo 'selected'; ?>>Fmale</option>
                          <option value= "Nothing" <?php if ($customer['gender'] == 'Nothing') echo 'selected'; ?>>Nothing</option>
                        </select>
                    </div>







                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">update</button>
                </div>
              </form>
          </div>
                    <!-- /.card -->
                </div>
            </div>
            <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<?php include('../layouts/footer.php'); ?>





                                    