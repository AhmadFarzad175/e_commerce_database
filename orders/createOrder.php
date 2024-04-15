<?php
include('../layouts/header.php');
include('../layouts/top_header.php');
include('../layouts/sidebar.php');

// Function to connect to the database
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

// Function to fetch data from the database and generate select options for customers
function generateCustomerSelectOptions($conn)
{
    $options = "";

    // Fetch data from the database for customers
    $sql = "SELECT customer_id, customer_name FROM customer";
    $result = mysqli_query($conn, $sql);

    // Generate select options for customers
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $options .= "<option value='" . $row["customer_id"] . "'>" . $row["customer_name"] . "</option>";
        }
    } else {
        $options .= "<option value='' disabled>No customers found</option>";
    }

    return $options;
}

// Function to fetch data from the database and generate select options for products
function generateProductSelectOptions($conn)
{
    $options = "";

    // Fetch data from the database for products
    $sql = "SELECT product_id, product_name FROM product";
    $result = mysqli_query($conn, $sql);

    // Generate select options for products
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $options .= "<option value='" . $row["product_id"] . "'>" . $row["product_name"] . "</option>";
        }
    } else {
        $options .= "<option value='' disabled>No products found</option>";
    }

    return $options;
}

// Connect to the database
$conn = connectToDatabase();
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Order</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create Order</li>
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
                            <h3 class="card-title">Create Order</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="../config/insertOrder.php" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="date">Date:</label>
                                    <input type="date" name="date" class="form-control" id="date" value="<?php echo date('Y-m-d'); ?>" required>
                                </div>
                                <!-- Customer Dropdown -->
                                <div class="form-group">
                                    <label for="customer">Customer:</label>
                                    <select class="form-control" name="customer_id" required>
                                        <option value="" selected>Select Customer</option> <!-- Added default option -->
                                        <?php echo generateCustomerSelectOptions($conn); ?>
                                    </select>
                                </div>

                                <!-- Product Dropdown -->
                                <div class="form-group">
                                    <label for="product">Product:</label>
                                    <select class="form-control" name="product_id" required>
                                        <option value="" selected>Select Product</option> <!-- Added default option -->
                                        <?php echo generateProductSelectOptions($conn); ?>
                                    </select>
                                </div>

                                <?php
                                // Close connection
                                mysqli_close($conn);
                                ?>
                                <div class="form-group">
                                    <label for="quantity">Quantity:</label>
                                    <input type="number" name="quantity" class="form-control" id="quantity" placeholder="Quantity" required>
                                </div>
                                <div class="form-group">
                                    <label for="total">Total:</label>
                                    <input type="number" name="total" class="form-control" id="total" placeholder="Total" required>
                                </div>

                                <div class="form-group">
                                    <label>State:</label>
                                    <select class="form-control" name="state" required>
                                        <option value="ordered">Ordered</option>
                                        <option value="delivered">Delivered</option>
                                        <option value="pending">Pending</option>
                                    </select>
                                </div>
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

<?php include('../layouts/footer.php'); ?>