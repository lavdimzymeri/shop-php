<?php
include("../connection/connection.php");

// Process product creation form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_sales"])) {
    // Retrieve product details from form
    $product_id = $_POST["product_id"];
    $customer_id = $_POST["customer_id"];
    $assistant_id = $_POST["assistant_id"];
    $sale_date = $_POST["sale_date"];
    $quantity = $_POST["quantity"];



    // Validate form input
    if (empty($product_id) || empty($customer_id) || empty($assistant_id) || empty($sale_date) || empty($quantity)) {
        echo "Please fill out all required fields.";
    } else {
        // Sanitize form input
        $product_id = mysqli_real_escape_string($conn, $product_id);
        $customer_id = mysqli_real_escape_string($conn, $customer_id);
        $assistant_id = mysqli_real_escape_string($conn, $assistant_id);
        $sale_date = mysqli_real_escape_string($conn, $sale_date);
        $quantity = mysqli_real_escape_string($conn, $quantity);


        // Insert product into database
        $sql = "INSERT INTO sales (product_id, customer_id, assistant_id, sale_date,quantity) VALUES ('$product_id', '$customer_id', '$assistant_id', '$sale_date', '$quantity')";

        if ($conn->query($sql) === TRUE) {
        //     echo '<div class="alert alert-primary col-lg-4 row justify-content-sm-center" style="position: absolute;
        //     margin-left: 355px;" role="alert">
        //     Product added successfully
        //   </div>';
        echo '<script>alert("Sales added succesfuly!")</script>)';

        } else {
            echo "Error: " . $sql . "<br>" .mysqli_error($conn);
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

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


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
    <h1 class="h3 mb-3 fw-normal text-center ">Buy Product</h1>

    <div class="form-floating mb-3">
    <label for="sale_date" style="margin-top: -15px; position: absolute; color: #a2a4a6;">Product:</label>
      <select name="product_id" class="form-control mb-2" id="floatingInput" placeholder="product_id" required>
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
  <div class="form-floating mb-3">
  <label for="sale_date" style="margin-top: -15px; position: absolute; color: #a2a4a6;">Customer:</label>
  <select name="customer_id" class="form-control mb-2" id="floatingInput" placeholder="name@example.com" required>
    <?php
    // Retrieve shops from the database
    $sql = "SELECT * FROM customers";
    $result = mysqli_query($conn, $sql);

    // Display shop options in the select input
    while ($row = mysqli_fetch_assoc($result)) {
      $selected = ($row['id'] == $customer_id) ? "selected" : "";
      echo "<option value='" . $row['id'] . "' $selected>" . $row['name'] . "</option>";
    }
    ?>
  </select>
  </div>
  <div class="form-floating mb-3">
  <label for="sale_date" style="margin-top: -15px; position: absolute; color: #a2a4a6;">Assistant:</label>
  <select name="assistant_id" class="form-control mb-2"  id="floatingInput" placeholder="name@example.com" required>
    <?php
    // Retrieve shops from the database
    $sql = "SELECT * FROM shop_assistants";
    $result = mysqli_query($conn, $sql);

    // Display shop options in the select input
    while ($row = mysqli_fetch_assoc($result)) {
      $selected = ($row['id'] == $assistant_id) ? "selected" : "";
      echo "<option value='" . $row['id'] . "' $selected>" . $row['name'] . "</option>";
    }
    ?>
  </select>
    </div>
    </div>
    <div class="form-floating mb-3">
      <input type="date" name="sale_date" required class="form-control"  placeholder="sale_date">
      <label for="sale_date">Sale Date:</label>
    </div>
   
    <div class="form-floating mb-3">
      <input type="number" name="quantity" class="form-control mb-2" required placeholder="quantity">
      <label for="quantity" style="color: #a2a4a6;">Quantity:</label>
    </div>

   
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="add_sales" value="add_sales">Buy</button>
  </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  

