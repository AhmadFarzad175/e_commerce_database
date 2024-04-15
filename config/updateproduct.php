<?php
// Include database connection
include('connect.php');

// Get form data
$product_name = $_POST['product_name'];
$price = $_POST['price'];
$category = $_POST['category'];
$mf_date = $_POST['mf_date'];
$expire_date = $_POST['expire_date'];
$quantity = $_POST['quantity'];
$product_id = $_POST['product_id'];

// SQL query to update product
$sql = "UPDATE product SET 
            product_name = '$product_name', 
            price = '$price', 
            mf_date = '$mf_date', 
            expire_date = '$expire_date', 
            quantity = '$quantity' 
        WHERE product_id = $product_id";

// Execute query
if (mysqli_query($conn, $sql)) {
    echo "Product updated successfully.";
    header("Location: ../product/listproducts.php"); // Redirect to product list page
    exit(); // Ensure that code execution stops after redirection
} else {
    echo "Error updating product: " . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);

