# Famoleras TFA4 – POS Authentication System

## Project Description

This project is a Point-of-Sale (POS) application developed using CodeIgniter 4 and MySQL.

TFA4 extends TFA3 by adding user authentication, password hashing, session management, protected routes, and logout functionality.

## Features

- Home and About pages
- Customer Accounts listing, creation, and editing
- User Accounts listing, creation, and editing
- User avatar upload with JPG/PNG validation and thumbnail preparation
- MySQL database integration
- Login using username and password
- Secure password hashing using `password_hash()`
- Password verification using `password_verify()`
- Session-based authentication
- Authentication filter protecting Customer and User Accounts routes
- Logout functionality

## Technologies Used

- PHP
- CodeIgniter 4
- MySQL
- HTML and CSS
- Composer
- XAMPP

## Requirements

- PHP compatible with the installed CodeIgniter version
- Composer
- MySQL
- PHP extensions: intl, mbstring, mysqli, gd

## Database Setup

1. Create a MySQL database named `famoleras_tfa4`.
2. Import the included `famoleras_tfa4.sql` file.
3. Configure your `.env` file with your database credentials.
4. Run the included `TFA4UserSeeder` to create sample users with hashed passwords.

## Local Installation

1. Clone or download this repository.
2. Open a terminal in the project folder.
3. Run `composer install`.
4. Copy the `env` file and rename the copy to `.env`.
5. Configure the base URL and database settings.

Example:

```ini
CI_ENVIRONMENT = development
app.baseURL = 'http://localhost:8080/'

database.default.hostname = localhost
database.default.database = famoleras_tfa4
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.port = 3306
```

6. Start MySQL using XAMPP.
7. Run the sample user seeder on a fresh database:

```bash
php spark db:seed TFA4UserSeeder
```

8. Start the CodeIgniter development server:

```bash
php spark serve
```

9. Open `http://localhost:8080/login`.

## Application Routes

| URL | Description |
|---|---|
| `/` | Home page |
| `/about` | About page |
| `/login` | User login |
| `/customers` | Protected customer listing |
| `/customers/new` | Protected customer creation |
| `/customers/edit/{id}` | Protected customer editing |
| `/users` | Protected user listing |
| `/users/new` | Protected user creation |
| `/users/edit/{id}` | Protected user editing |

## Authentication Flow

1. The user opens the login page.
2. The user enters a username and password.
3. The application retrieves the user from MySQL.
4. The entered password is checked using `password_verify()`.
5. Successful authentication regenerates the session ID and stores the user's login information.
6. The authentication filter restricts Customer Accounts and User Accounts pages to logged-in users.
7. Logout destroys the session and redirects to the login page.

## Security

- Passwords are stored as hashes rather than plaintext.
- Protected routes require an authenticated session.
- Session IDs are regenerated after successful login.
- Logout uses a POST request.
- Database credentials are stored in `.env`, which must not be committed to GitHub.
- Sample passwords must be changed before using the application with real accounts.

## Database Files

`famoleras_tfa4.sql` contains the database structure. `TFA4UserSeeder.php` provides sample users and generates password hashes during setup.

## Project Author

Lance Kevin Famoleras

## Academic Project

IT0049 – Web System Technologies  
TFA4 – Authentication and Session Management