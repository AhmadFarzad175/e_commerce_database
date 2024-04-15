<?php
// Include database connection
include('../config/connect.php');

// Initialize $product_id variable
$product_id = null;

// Check if 'product_id' parameter is set in the URL
if (isset($_GET['product_id'])) {
    // Get product ID from URL parameter
    $product_id = intval($_GET['product_id']);

    // Fetch product data from the database
    $sql = "SELECT * FROM `product` WHERE product_id = $product_id";
    $result = mysqli_query($conn, $sql);

    // Check if product exists
    if ($result && mysqli_num_rows($result) > 0) {
        // Fetch product data
        $product = mysqli_fetch_assoc($result);
    } else {
        // Product not found, handle the error (e.g., redirect or display error message)
        echo "Product not found.";
        exit(); // Stop further execution
    }

    // Close database connection
    mysqli_close($conn);
} else {
    // 'product_id' parameter is not set in the URL, handle the error (e.g., redirect or display error message)
    echo "Product ID is missing.";
    exit(); // Stop further execution
}
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
                    <h1 class="m-0">Product Management</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Update Product</li>
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
                            <h3 class="card-title">Product Management</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="../config/updateproduct.php" method="post">
                        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="product_name">Product Name</label>
                                    <input type="text" name="product_name" class="form-control" id="product_name" placeholder="Product name" value="<?php echo isset($product['product_name']) ? $product['product_name'] : ''; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" name="price" class="form-control" id="price" placeholder="Price" value="<?php echo isset($product['price']) ? $product['price'] : ''; ?>">
                                </div>
                              
                                <div class="form-group">
                                    <label for="category">Category ID</label>
                                    <input type="text" name="category" class="form-control" id="category" placeholder="Category ID" value="<?php echo isset($product['category']) ? $product['category'] : ''; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="mf_date">Manufacture Date</label>
                                    <input type="text" name="mf_date" class="form-control" id="mf_date" placeholder="Manufacture Date" value="<?php echo isset($product['mf_date']) ? $product['mf_date'] : ''; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="expire_date">Expire Date</label>
                                    <input type="text" name="expire_date" class="form-control" id="expire_date" placeholder="Expire Date" value="<?php echo isset($product['expire_date']) ? $product['expire_date'] : ''; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="quantity">Quantity</label>
                                    <input type="text" name="quantity" class="form-control" id="quantity" placeholder="Quantity" value="<?php echo isset($product['quantity']) ? $product['quantity'] : ''; ?>">
                                </div>
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
