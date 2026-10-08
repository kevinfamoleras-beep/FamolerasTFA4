<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

// Public routes
$routes->get('/', 'Pages::index');
$routes->get('/about', 'Pages::about');

// Login
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::attemptLogin');

// Logout
$routes->post('/logout', 'Auth::logout', ['filter' => 'auth']);

// Protected routes
$routes->group('', ['filter' => 'auth'], static function ($routes) {

    // Customer Accounts
    $routes->get('customers', 'Customers::index');
    $routes->get('customers/new', 'Customers::new');
    $routes->post('customers/create', 'Customers::create');
    $routes->get('customers/edit/(:num)', 'Customers::edit/$1');
    $routes->post('customers/update/(:num)', 'Customers::update/$1');

    // User Accounts
    $routes->get('users', 'Users::index');
    $routes->get('users/new', 'Users::new');
    $routes->post('users/create', 'Users::create');
    $routes->get('users/edit/(:num)', 'Users::edit/$1');
    $routes->post('users/update/(:num)', 'Users::update/$1');
});