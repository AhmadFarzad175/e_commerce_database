<?php
include('connect.php');
$product = $_POST['product'];
$order = $_POST['order'];
$discount = $_POST['discount'];
$price = $_POST['price'];

// $sql = "insert into users (user_name,order,discount) values ('".$product."','".$order."','".$discount."')";

$sql = "INSERT INTO sells (product_id, order_id, discount, price) 
        VALUES ('$product', '$order', '$discount', '$price')";

if (mysqli_query($conn, $sql)) {
  header("Location: ../sells/listsells.php");
  exit(); // Ensure that code execution stops after redirection
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
