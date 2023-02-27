<link rel="stylesheet" href="../css/style.css">
<style>
  table{
        width: 70%;
    }
</style>
<?php

include('../connection/connection.php');
  // Retrieve shops from database
  $query = "SELECT * FROM shop_assistants";
  $result = mysqli_query($conn, $query);

  // Check if any shops were found
  if (mysqli_num_rows($result) > 0) {
    // Display the shops in a table
    echo '<table>';
    echo '<thead><tr><th>ID</th><th>Name</th><th>ID shop</th><th>Action</th></tr></thead>';
    echo '<tbody>';
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<tr>';
      echo '<td>' . $row['id'] . '</td>';
      echo '<td>' . $row['name'] . '</td>';
      echo '<td>' . $row['shop_id'] . '</td>';
      echo "<td><a href='update.php?id= $row[id]   '>Edit</a></td>";

      echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
  } else {
    echo 'No shops found.';
  }
?>
