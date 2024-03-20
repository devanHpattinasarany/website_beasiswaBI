<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::login');
// $routes->get('/login', 'Home::login');
// $routes->get('/register', 'Home::register');



// $routes->get('/landingpage', 'Home::landing');
// $routes->get('/', 'Home::login');
// // $routes->get('/login', 'Home::login');
$routes->get('/', 'Home::dashboard');
// $routes->get('/pendaftar1', 'Home::pendaftar1');
// $routes->get('/pendaftar2', 'Home::pendaftar2');
// $routes->get('/profile', 'Home::profile');
// $routes->get('/diterima', 'Home::diterima');

// // kemahasiswaan
// $routes->get('/dashboard_kmhs', 'Home::dashboard_kmhs');
// $routes->get('/pendaftar', 'Home::pendaftar');
// $routes->get('/diterima', 'Home::diterima');
