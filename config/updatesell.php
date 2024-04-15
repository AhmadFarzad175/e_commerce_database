<?php
include('connect.php');
$product = $_POST['product'];
$order = $_POST['order'];
$discount = $_POST['discount'];
$price = $_POST['price'];
$sell_id = $_POST['sell_id'];

// $sql = "insert into users (user_name,password,role) values ('".$username."','".$password."','".$role."')";

$sql = "UPDATE sells SET product_id = '$product', order_id = '$order', discount = '$discount'
        , price = '$price' WHERE id = $sell_id";

if (mysqli_query($conn, $sql)) {
  header("Location: ../sells/listsells.php");
  exit(); // Ensure that code execution stops after redirection
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>