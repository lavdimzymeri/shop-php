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
<img width="953" alt="Screenshot_5" src="https://user-images.githubusercontent.com/115353029/221545701-395cb951-6772-4cad-9f6a-d3e49e166a55.png">

List of all shops:
<img width="936" alt="Screenshot_6" src="https://user-images.githubusercontent.com/115353029/221545829-44adaf5e-6b85-41d8-969a-5cfe5596e8aa.png">

Add new shop assistant: 
<img width="946" alt="Screenshot_7" src="https://user-images.githubusercontent.com/115353029/221545932-2a24bc97-b008-4658-9ab7-bdcbd678d39b.png">

List of the assistant:
<img width="948" alt="Screenshot_9" src="https://user-images.githubusercontent.com/115353029/221546312-a9533f1f-bea7-4076-84b1-e50abae1edea.png">

Add the service: 
<img width="951" alt="Screenshot_10" src="https://user-images.githubusercontent.com/115353029/221546427-dc2b47f3-8bfe-444b-84d7-265ae901efc3.png">

List of product services:

<img width="949" alt="Screenshot_11" src="https://user-images.githubusercontent.com/115353029/221546573-3629d3a0-41a0-4a43-b03e-1e2beb292286.png">

Add product: 

<img width="947" alt="Screenshot_8" src="https://user-images.githubusercontent.com/115353029/221544815-31f0b132-a801-4d53-bf67-8c9829fc4447.png">

Show all products:

<img width="947" alt="Screenshot_1" src="https://user-images.githubusercontent.com/115353029/221545144-a85b704e-6d35-4700-8297-eb3c22ef7299.png">

Add the customer: 
<img width="950" alt="Screenshot_3" src="https://user-images.githubusercontent.com/115353029/221545461-98caaf4a-421d-4760-afa2-787e5aed7568.png">

Add a sale to the customer: 
<img width="956" alt="Screenshot_4" src="https://user-images.githubusercontent.com/115353029/221545589-460dff5c-613b-40ce-87ff-7adb534d8f16.png">

Table of sales:
<img width="923" alt="Screenshot_12" src="https://user-images.githubusercontent.com/115353029/221546984-2a37de0b-09d7-42ae-a0e3-dce9881c0f4c.png">



Installation:
To install the system, follow these steps:

    Download and install a web server software such as XAMPP, WAMP, or MAMP.
    Download the project files and extract them to the web server's root directory.
    Import the database schema file into your database server.
    Modify the database connection settings in the config.php file.
    Access the system by navigating to the web server's URL.
