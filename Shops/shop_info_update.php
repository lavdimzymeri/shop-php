<?php
// Include the database connection code
include('../connection/connection.php');

// Retrieve the form data
$id = $_POST['id'];
$name = $_POST['name'];
$city = $_POST['city'];

// Update the shop data in the database
$sql = 'UPDATE shops SET name="$name", city="$city", WHERE id="$id" ';
if (mysqli_query($conn, $sql)) {
    // If the update was successful, redirect the user back to the shops page
    header("Location: tableDisplay.php");
} else {
    // If the update failed, display an error message
    echo "Error updating shop: " . mysqli_error($conn);
}


?>

