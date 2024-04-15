<?php
// Include database connection
include('../config/connect.php');

// Get user ID from URL parameter
$user_id = $_GET['id'];

// Fetch user data from the database
$sql = "SELECT * FROM users WHERE id = $user_id";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);

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
                        <form action="../config/updateuser.php" method="post">
                            <div class="card-body">
                                <input type="hidden" name="user_id" value=$user_id>
                                <div class="form-group">
                                    <label for="username">User Name</label>
                                    <input type="text" name="username" class="form-control" id="username" placeholder="User name" value="<?php echo $user['user_name']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?php echo $user['password']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Role</label>
                                    <select class="form-control" name="role">
                                        <option value="user" <?php if ($user['role'] == 'user') echo 'selected'; ?>>User</option>
                                        <option value="Admin" <?php if ($user['role'] == 'Admin') echo 'selected'; ?>>Admin</option>
                                        <option value="cashier" <?php if ($user['role'] == 'cashier') echo 'selected'; ?>>Cashier</option>
                                    </select>
                                </div>
                                <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
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
