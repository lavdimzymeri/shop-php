<?php

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sol_25";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if it does not exist
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    // Select the database
    $conn->select_db($dbname);

    // SQL query to create tables and establish relationships
    $sql = "
        CREATE TABLE shops (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            city VARCHAR(255) NOT NULL
        );

        CREATE TABLE shop_assistants (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            shop_id INT(11) NOT NULL,
            FOREIGN KEY (shop_id) REFERENCES shops(id) ON DELETE CASCADE
        );

        CREATE TABLE products (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            description TEXT,
            validity DATE,
            state VARCHAR(255),
            shop_id INT(11) NOT NULL,
            FOREIGN KEY (shop_id) REFERENCES shops(id) ON DELETE CASCADE
        );

        CREATE TABLE services (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            description TEXT,
            price DECIMAL(10,2) NOT NULL,
            product_id INT(11) NOT NULL,
            FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE
        );

        CREATE TABLE customers (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            surname VARCHAR(255) NOT NULL,
            address TEXT,
            phone_number VARCHAR(20)
        );

        CREATE TABLE sales (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            product_id INT(11) NOT NULL,
            customer_id INT(11) NOT NULL,
            assistant_id INT(11) NOT NULL,
            sale_date DATE NOT NULL,
            quantity INT(11) NOT NULL,
            FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE,
            FOREIGN KEY (customer_id) REFERENCES customers(id) ON DELETE CASCADE,
            FOREIGN KEY (assistant_id) REFERENCES shop_assistants(id) ON DELETE CASCADE
        );
    ";

    if ($conn->multi_query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        // echo "Error creating database: " . $conn->error;
        echo "";
    }
} else {
    // echo "Error creating database: " . $conn->error;
    echo "";

}



