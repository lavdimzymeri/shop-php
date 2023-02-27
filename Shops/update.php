<!-- <?php
include('../connection/connection.php');

// Retrieve the selected row data from the database based on the row ID
$id = $_GET['id']; // get the ID of the selected row from the URL parameter
$sql = "SELECT * FROM shops WHERE id = $id";
$result = mysqli_query($conn, $sql); // $conn is the database connection object
$row_data = mysqli_fetch_assoc($result); // get the data of the selected row as an associative array

// Populate the form fields with the retrieved data
?>


<form action="shop_info_update.php" method="post">
  <input type="hidden" name="id" value="<?php  $id; ?>" />

  <label for="name">Name:</label>
  <input type="text" name="name" id="name" value="<?php $name; ?>" />

  <label for="city">City:</label>
  <input type="text" name="city" id="city" value="<?php $city; ?>" />

  <input type="submit" value="Update Shop" />
</form> -->


