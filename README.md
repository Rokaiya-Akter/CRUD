# PHP CRUD Application

## Overview
This is a basic PHP CRUD (Create, Read, Update, Delete) web application using PHP and MySQL. It allows users to manage data records via a browser interface.

## Requirements
- XAMPP (includes Apache, PHP, MySQL)
- PHP 7.4 or later
- Browser (Chrome, Firefox, etc.)

## Setup Instructions
1. Extract the project folder `crud` into:
   C:\xampp\htdocs\

2. Open XAMPP Control Panel:
   - Start Apache
   - Start MySQL

3. Open http://localhost/phpmyadmin in your browser:
   - Create a new database (e.g., `crud_db`)
   - Import the provided SQL file if included (e.g., `crud.sql`)

4. Configure database connection in `config/db.php`:
   ```php
   $conn = mysqli_connect("localhost", "root", "", "crud_db");
