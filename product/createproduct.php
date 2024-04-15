<?php 
include('../layouts/header.php');
include('../layouts/top_header.php');
include('../layouts/sidebar.php');

// Include database connection file
include('../config/db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data when form is submitted
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $mf_date = $_POST['mf_date'];
    $expire_date = $_POST['expire_date'];
    $quantity = $_POST['quantity'];

    // Update product in database
    $sql = "UPDATE product 
            SET product_name = ?, price = ?,  
                category = ?, mf_date = ?, expire_date = ?, 
                quantity = ?
            WHERE product_id = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssiisii', $product_name, $price, $category, $mf_date, $expire_date, $quantity, $product_id);

    if ($stmt->execute()) {
        echo "Product updated successfully";
    } else {
        echo "Error updating product: " . $stmt->error;
    }
}

include('../layouts/footer.php');
?>



<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Product Management</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create Product</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Product Management</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="../config/productmanagement.php" method="post">
                            <div class="card-body">
                               
                                <div class="form-group">
                                    <label for="product_name">Product Name</label>
                                    <input type="text" name="product_name" class="form-control" id="product_name" placeholder="Product name">
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" name="price" class="form-control" id="price" placeholder="Price">
                                </div>
                              
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <input type="text" name="category" class="form-control" id="category" placeholder="Category">
                                </div>
                                <div class="form-group">
                                    <label for="mf_date">Manufacture Date</label>
                                    <input type="text" name="mf_date" class="form-control" id="mf_date" placeholder="Manufacture Date">
                                </div>
                                <div class="form-group">
                                    <label for="expire_date">Expire Date</label>
                                    <input type="text" name="expire_date" class="form-control" id="expire_date" placeholder="Expire Date">
                                </div>
                                <div class="form-group">
                                    <label for="quantity">Quantity</label>
                                    <input type="text" name="quantity" class="form-control" id="quantity" placeholder="Quantity">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!--/. container-fluid -->
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside><!-- /.control-sidebar -->

<?php include('../layouts/footer.php');?>
