<?php
include('connect.php'); // Include database connection

$customerName = $_POST['customerName'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$userName = $_POST['user_name'];
$password = $_POST['password'];
$gender = $_POST['Gender'];




//echo(move_uploaded_file($fileTmp,$destination));



// Move uploaded file to destination directory

// File uploaded successfully, now save its path to database
$sql = " UPDATE customer SET customer_name='$customerName', phone='$phone', age=$age, user_name='$userName', password=' $password', gender='$gender'";



//mysqli_query($conn, $sql);


if (mysqli_query($conn, $sql)) {
    echo "New customer created successfully.";
    // Redirect to another page if needed
    header("Location: ../users/listcustomer.php");
    exit(); // Ensure that code execution stops after redirection
} else {
    echo "Error: ";
}
