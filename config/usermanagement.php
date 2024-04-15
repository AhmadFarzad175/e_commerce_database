<?php
include('connect.php');
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

// $sql = "insert into users (user_name,password,role) values ('".$username."','".$password."','".$role."')";

$sql = "INSERT INTO users (user_name, password, role) VALUES ('$username', '$password', '$role')";

if (mysqli_query($conn, $sql)) {
  echo "New user created successfully.";
  header("Location: home.php");
  exit(); // Ensure that code execution stops after redirection
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

