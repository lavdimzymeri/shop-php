<link rel="stylesheet" href="../css/style.css">
<style>
  table{
        width: 70%;
    }
</style>
<?php

include('../connection/connection.php');
  // Retrieve shops from database
  $query = "SELECT * FROM services";
  $result = mysqli_query($conn, $query);

  // Check if any shops were found
  if (mysqli_num_rows($result) > 0) {
    // Display the shops in a table
    echo '<table>';
    echo '<thead><tr><th>Product ID</th><th>Name</th><th>Description</th><th>Price</th><th>Action</th></tr></thead>';
    echo '<tbody>';
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<tr>';
      echo '<td>' . $row['product_id'] . '</td>';
      echo '<td>' . $row['name'] . '</td>';
      echo '<td>' . $row['description'] . '</td>';
      echo '<td>' . $row['price'] . '</td>';
      echo "<td><a href='update.php?id= $row[id]   '>Edit</a></td>";

      echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
  } else {
    echo 'No Services found.';
  }
?>
