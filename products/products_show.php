<link rel="stylesheet" href="../css/style.css">
<style>
    table{
        width: 80%;
    }
</style>
<?php

include('../connection/connection.php');
  // Retrieve shops from database
  $query = "SELECT * FROM products";
  $result = mysqli_query($conn, $query);

  // Check if any shops were found
  if (mysqli_num_rows($result) > 0) {
    // Display the shops in a table
    echo '<table>';
    echo '<thead><tr><th>Shop ID</th><th>Name</th><th>Description</th><th>Validity</th><th>State</th><th>Action</th></tr></thead>';
    echo '<tbody>';
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<tr>';
      echo '<td>' . $row['shop_id'] . '</td>';
      echo '<td>' . $row['name'] . '</td>';
      echo '<td>' . $row['description'] . '</td>';
      echo '<td>' . $row['validity'] . '</td>';
      echo '<td>' . $row['state'] . '</td>';
      echo "<td><a href='update.php?id= $row[id]   '>Edit</a></td>";

      echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
  } else {
    echo 'No Services found.';
  }
?>
