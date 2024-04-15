<?php
// Include database connection
include('../config/connect.php');

// Get sell ID from URL parameter
$sell_id = $_GET['id'];

// Fetch sell data from the database
$sql = "SELECT * FROM sells WHERE id = $sell_id";
$result = mysqli_query($conn, $sql);
$sell = mysqli_fetch_assoc($result);

// Close database connection
mysqli_close($conn);
function connectToDatabase()
{
  $servername = "localhost"; // Change this to your database server name
  $username = "root"; // Change this to your database username
  $password = ""; // Change this to your database password
  $database = "e_commerce"; // Change this to your database name

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database);

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  return $conn;
}

// Function to fetch data from the database and generate select options for Sells
function generateOrderSelectOptions($conn)
{
  $options = "";

  // Fetch data from the database for customers
  $sql = "SELECT id FROM orders";
  $result = mysqli_query($conn, $sql);

  // Generate select options for customers
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $options .= "<option value='" . $row["id"] . "'>" . $row["id"] . "</option>";
    }
  } else {
    $options .= "<option value='' disabled>No order found</option>";
  }
  return $options;
}


// Function to fetch data from the database and generate select options for Sells
function generateProductSelectOptions($conn)
{
  $options = "";

  // Fetch data from the database for customers
  $sql = "SELECT product_id, product_name FROM product";
  $result = mysqli_query($conn, $sql);

  // Generate select options for customers
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $options .= "<option value='" . $row["product_id"] . "'>" . $row["product_name"] . "</option>";
    }
  } else {
    $options .= "<option value='' disabled>No order found</option>";
  }

  return $options;
}

// Connect to the database
$conn = connectToDatabase();
?>
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
                    <h1 class="m-0">Sell Management</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Update sell</li>
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
                            <h3 class="card-title">Sell Management</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="../config/updatesell.php" method="post">

                            <div class="card-body">
                                <input type="hidden" name="sell_id" value=$sell_id>

                                <!-- product Dropdown -->
                                <div class="form-group">
                                    <label for="product">product</label>
                                    <select class="form-control" name="product" required>
                                        <option value="" selected>Select product</option> <!-- Added default option -->
                                        <?php echo generateProductSelectOptions($conn); ?>
                                    </select>
                                </div>

                                <!-- order Dropdown -->
                                <div class="form-group">
                                    <label for="order">order</label>
                                    <select class="form-control" name="order" required>
                                        <option value="" selected>Select order</option> <!-- Added default option -->
                                        <?php echo generateOrderSelectOptions($conn); ?>
                                    </select>
                                </div>

                                <?php
                                // Close connection
                                mysqli_close($conn);
                                ?>

                                <div class="form-group">
                                    <label for="discount">discount</label>
                                    <input type="text" name="discount" class="form-control" id="discount" placeholder="discount" value="<?= $sell['discount'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="price">price</label>
                                    <input type="text" name="price" class="form-control" id="price" placeholder="price" value="<?= $sell['price'] ?>">
                                </div>
                                <input type="hidden" name="sell_id" value="<?php echo $sell['id']; ?>">
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
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