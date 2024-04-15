<?php
include('../config/connect.php');

// Check if the ID parameter is set in the URL
if (isset($_GET['id'])) {
    // Sanitize the user ID to prevent SQL injection
    $sell_id = mysqli_real_escape_string($conn, $_GET['id']);

    // Proceed with your deletion logic
    // For example, you can write a SQL query to delete the sell with this ID from the database
    $sql = "DELETE FROM sells WHERE id = '$sell_id'";
    if (mysqli_query($conn, $sql)) {
        // sell deleted successfully
        header("Location: listsells.php");
    } else {
        // Error occurred while deleting user
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    // If the ID parameter is not set in the URL, handle the error
    echo "User ID not provided.";
}
?>
