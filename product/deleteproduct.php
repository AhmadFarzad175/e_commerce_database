<?php
include('../config/connect.php');

// Check if the ID parameter is set in the URL
if (isset($_GET['id'])) {
    // Sanitize the product ID to prevent SQL injection
    $product_id = mysqli_real_escape_string($conn, $_GET['id']);

    // Proceed with your deletion logic
    // For example, you can write a SQL query to delete the product with this ID from the database
    $sql = "DELETE FROM product WHERE product_id = '$product_id'";
    if (mysqli_query($conn, $sql)) {
        // product deleted successfully
        echo "product deleted successfully.";
        header("Location: listproducts.php");
    } else {
        // Error occurred while deleting product
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    // If the ID parameter is not set in the URL, handle the error
    echo "product ID not provided.";
}
