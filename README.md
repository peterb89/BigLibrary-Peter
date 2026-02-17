Big Library – PHP & MySQL CRUD Application
This project is a simple web application built with PHP, MySQL, and Bootstrap.
It manages a small media library containing books, CDs, and DVDs related to classical music composers.
The goal of the project was to demonstrate a full CRUD workflow and basic database interaction.

Features
Display a list of all media items

Add new items (Create)

Edit existing items (Update)

Delete items (Delete)

View item details on a separate page

Filter items by publisher

Responsive layout using Bootstrap

Image support for each media entry

Technologies Used
PHP (procedural)

MySQL

phpMyAdmin

HTML5 & CSS3

Bootstrap 5

Database
The project includes an SQL export file containing the full database structure and sample data.
You can import it using phpMyAdmin or the MySQL command line.

Project Structure
Code
/images        → media cover images
create.php     → add new item
edit.php       → update item
delete.php     → remove item
details.php    → item details page
publisher.php  → filter by publisher
index.php      → main listing page
db_connect.php → database connection
update.php     → update logic
How to Run the Project
Import the SQL file into your MySQL server

Place the project files in your local server directory (e.g., htdocs or www)

Adjust the database credentials in db_connect.php

Open the project in your browser
