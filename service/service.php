<?php
include("../connection/connection.php");


// Process service creation form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_service"])) {
    // Retrieve service details from form
    $product_id = $_POST["product_id"];
    $name = $_POST["name"];
    $description = $_POST["description"];
    $price = $_POST["price"];

    // Validate form input
    if (empty($product_id) || empty($name) || empty($description) || empty($price)) {
        echo "Please fill out all required fields.";
    } else {
        // Sanitize form input
        $product_id = mysqli_real_escape_string($conn, $product_id);
        $name = mysqli_real_escape_string($conn, $name);
        $description = mysqli_real_escape_string($conn, $description);
        $price = mysqli_real_escape_string($conn, $price);

        // Insert service into database
        $sql = "INSERT INTO services (product_id, name, description, price) VALUES ('$product_id', '$name', '$description', '$price')";

        if ($conn->query($sql) === TRUE) {
            // echo "Service added successfully.";
            echo '<script>alert("Service added succesfuly!")</script>';

        } else {
            echo "Error: " . $sql . "<br>"  . mysqli_error($conn);
        }
    }
}
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">

    

    

<link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
    

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../bootstrap.css" rel="stylesheet">
  </head>

  <div class="container h-100">
    <div class="row justify-content-sm-center h-100">
      <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
        <div class="text-center my-5">
        </div>
        <div class="card shadow-lg">
          <div class="card-body p-5">
         
        
  <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <h1 class="h3 mb-3 fw-normal text-center ">Add Service</h1>

    <div class="form-floating mb-3">
      <select name="product_id" class="form-control" id="floatingInput" placeholder="name@example.com" required>
    <?php
    // Retrieve shops from the database
    $sql = "SELECT * FROM products";
    $result = mysqli_query($conn, $sql);

    // Display shop options in the select input
    while ($row = mysqli_fetch_assoc($result)) {
        $selected = ($row['id'] == $product_id) ? "selected" : "";
        echo "<option value='" . $row['id'] . "' $selected>" . $row['name'] . "</option>";
      }
    ?>
  </select>
      <label for="product_id">Product ID:</label>
    </div>
    <div class="form-floating mb-3">
      <input type="text" name="name" required class="form-control"  placeholder="Name">
      <label for="name">Name:</label>
    </div>
    <div class="form-floating mb-3">
      <textarea name="description" required class="form-control" placeholder="Description"></textarea>
      <label for="description">Description:</label>
    </div>
    <div class="form-floating mb-3">
      <input type="number" name="price" required class="form-control"  placeholder="price">
      <label for="price">Price:</label>
    </div>
    

   
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="add_service" value="Add Service">Add Service</button>
  </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  








