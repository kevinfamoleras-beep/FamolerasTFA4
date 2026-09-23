# Famoleras TFA2 - POS System

## Description

This project is a basic Point-of-Sale (POS) system developed using CodeIgniter 4.

TFA2 extends the TFA1 project by replacing the static PHP arrays for Customer Accounts and User Accounts with data retrieved from a MySQL database.

## Features

- Home page
- About page
- Customer Accounts page
- User Accounts page
- MySQL database connection
- CustomerModel and UserModel
- CodeIgniter Query Builder for retrieving records

## Requirements

- PHP
- Composer
- CodeIgniter 4
- MySQL
- XAMPP or another local PHP/MySQL environment

## Local Setup

1. Place or clone the project on your computer.
2. Start Apache and MySQL in XAMPP.
3. Create a MySQL database named:

   `famoleras_pos`

4. Import the included database export:

   `famoleras_pos.sql`

5. Configure the database connection in the `.env` file.

Example local configuration:

    database.default.hostname = localhost
    database.default.database = famoleras_pos
    database.default.username = root
    database.default.password =
    database.default.DBDriver = MySQLi
    database.default.port = 3306

6. Open a terminal in the project directory and run:

   `php spark serve`

7. Open the application at:

   `http://localhost:8080`

## Pages

- `/` - Home
- `/about` - About
- `/customers` - Customer Accounts
- `/users` - User Accounts

## Database Tables

The application uses two tables:

- `customers`
- `users`

Customer and user records are retrieved through CodeIgniter Models using Query Builder.