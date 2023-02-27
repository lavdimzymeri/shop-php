Introduction:
This project is a database management system designed for a shop to keep track of its inventory, customers, and sales. 
It provides an interface for the shop owner to manage the shop's information, 
as well as the products, services, and customers.

Features:
The system includes the following features:

      1.Shop Management: Allows the shop owner to add or modify shop information, and assign shop assistants to the shop.

      2.Shop Assistant Management: Allows the shop owner to add or modify shop assistant information.

      3.Service Management: Allows the shop owner to add or modify service information, and enable/disable services.

      4.Product Management: Allows the shop owner to add or modify product information, and change the state of products (in stock/out of stock).

      5.Customer Management: Allows the shop owner to add or modify customer information.

      6.Sales Management: Allows the shop owner to add sales to the customer's account.

      7.Reporting: Allows the shop owner to generate various reports such as product sales, 
      top sold services, products and services per client, products out of stock, sales for the 
      shop assistant, sales for shop, best and worst selling shop assistant.

Database:
The database for this system is designed using normalized database schema to reduce 
redundancy and improve data integrity. The schema follows the steps of normalization (1NF, 2NF, 3NF).


Stored Procedures:
The system includes several stored procedures to make the database more efficient. 
The stored procedures include:

Create a shop: 



Add new shop assistant: 


Add the service: 



Add product: 

<img width="947" alt="Screenshot_8" src="https://user-images.githubusercontent.com/115353029/221544815-31f0b132-a801-4d53-bf67-8c9829fc4447.png">



Add/remove services to product: 


Add the customer: 


Add a sale to the customer: 



Installation:
To install the system, follow these steps:

    Download and install a web server software such as XAMPP, WAMP, or MAMP.

    Download the project files and extract them to the web server's root directory.

    Import the database schema file into your database server.

    Modify the database connection settings in the config.php file.

    Access the system by navigating to the web server's URL.
