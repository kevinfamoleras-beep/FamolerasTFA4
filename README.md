# Famoleras TFA3 - POS System

## Description

This project is a Point-of-Sale (POS) application developed using CodeIgniter 4 and MySQL.

TFA3 extends TFA2 by adding customer and user account creation and editing, form validation, and user avatar upload with image preparation.

## Features

- Home page
- About page
- Customer Accounts listing
- User Accounts listing
- Create new customers
- Edit existing customers
- Customer form validation
- Create new users
- Edit existing users
- Unique username validation
- User avatar upload
- JPG and PNG image validation
- Maximum avatar upload size of 2 MB
- Display-ready 300x300 avatar preparation
- Placeholder display when a user has no avatar
- MySQL database
- CodeIgniter Models and Query Builder

## Requirements

- PHP
- Composer
- CodeIgniter 4
- MySQL
- PHP GD extension
- XAMPP or another PHP/MySQL environment

## Local Setup

1. Clone or download the project.
2. Start Apache and MySQL.
3. Create a MySQL database named `famoleras_pos`.
4. Import `famoleras_pos.sql`.
5. Configure the database connection in `.env`.

Example:

    database.default.hostname = localhost
    database.default.database = famoleras_pos
    database.default.username = root
    database.default.password =
    database.default.DBDriver = MySQLi
    database.default.port = 3306

6. Make sure the PHP GD extension is enabled.
7. Open a terminal in the project folder.
8. Run:

    php spark serve

9. Open:

    http://localhost:8080

## Main Routes

- `/` - Home
- `/about` - About
- `/customers` - Customer Accounts
- `/customers/new` - New Customer
- `/users` - User Accounts
- `/users/new` - New User

## Avatar Upload

User avatars are uploaded through the User Edit page.

Accepted formats:

- JPG/JPEG
- PNG

Maximum file size: 2 MB.

Uploaded images are prepared as 300x300 display-ready images and stored in `public/uploads/avatars`. Only the avatar filename is stored in the database.