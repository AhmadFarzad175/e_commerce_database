<?php
include('connect.php');
$customerName = $_POST['customerName'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$userName = $_POST['user_name'];
$password = $_POST['password'];
$gender = $_POST['Gender'];


$sql = "INSERT INTO Customer (customer_name, phone, age,user_name,password,gender)
 VALUES                       ('$customerName','$phone', $age ,'$userName','$password','$gender')";

if (mysqli_query($conn, $sql)) {
  echo "New customer created successfully.";
  echo($fileName=$_FILES['photo']['name']);

  //header("Location: ../users/listuser.php");
  exit(); // Ensure that code execution stops after redirection
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>


<?php
?>
