<?php
include('connect.php');

$date = $_POST['date'];
$customer_id = $_POST['customer_id'];
$product_id = $_POST['product_id'];
$state = $_POST['state'];
$quantity = $_POST['quantity'];
$total = $_POST['total'];



// Construct SQL query
$sql = "INSERT INTO `orders` (date, customer_id, product_id, state, total, quantity) 
        VALUES ('$date', $customer_id, $product_id, '$state', $total, $quantity)";


if (mysqli_query($conn, $sql)) {
    echo "New order created successfully.";
    header("Location: ../orders/listOrders.php");
    exit(); // Ensure that code execution stops after redirection
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
