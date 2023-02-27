<link rel="stylesheet" href="../css/style.css">
<style>
    table{
        width: 80%;
    }
</style>
<?php

include('../connection/connection.php');
  // Retrieve shops from database
  $query = "SELECT * FROM customers";
  $result = mysqli_query($conn, $query);

  // Check if any shops were found
  if (mysqli_num_rows($result) > 0) {
    // Display the shops in a table
    echo '<table>';
    echo '<thead><tr><th>Name</th><th>Surname</th><th>Address</th><th>Phone</th><th>Action</th></tr></thead>';
    echo '<tbody>';
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<tr>';
      echo '<td>' . $row['name'] . '</td>';
      echo '<td>' . $row['surname'] . '</td>';
      echo '<td>' . $row['address'] . '</td>';
      echo '<td>' . $row['phone_number'] . '</td>';
      echo "<td><a href='update.php?id= $row[id]   '>Edit</a></td>";

      echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
  } else {
    echo 'No Services found.';
  }
?>
