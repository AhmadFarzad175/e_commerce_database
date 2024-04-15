<?php
include('connect.php');
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];
$user_id = $_POST['user_id'];

// $sql = "insert into users (user_name,password,role) values ('".$username."','".$password."','".$role."')";

$sql = "UPDATE users SET user_name = '$username', password = '$password', role = '$role' WHERE id = $user_id";

if (mysqli_query($conn, $sql)) {
  echo "New user updated successfully.";
  header("Location: ../users/listuser.php");
  exit(); // Ensure that code execution stops after redirection
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>