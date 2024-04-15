<?php
include('connect.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $mf_date = $_POST['mf_date'];
    $expire_date = $_POST['expire_date'];
    $quantity = $_POST['quantity'];

    // SQL query to insert new product
    $sql = "INSERT INTO product (product_name, price, category, mf_date, expire_date, quantity) 
            VALUES ('$product_name', '$price', '$category', '$mf_date', '$expire_date', '$quantity')";

    // Execute query
    if (mysqli_query($conn, $sql)) {
        echo "New product created successfully.";
        header("Location: ../product/listproducts.php");
        exit(); // Ensure that code execution stops after redirection
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Invalid request method.";
}
