<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */



$routes->get('/index', 'Home::index');

$routes->get('/', 'Home::dashboard');
$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/pendaftar/hal-1', 'Pendaftaran1::index');
$routes->post('/pendaftar/hal-1', 'Pendaftaran1::store');
$routes->get('/pendaftar/hal-2', 'Pendaftaran2::index');
$routes->post('/pendaftar/hal-2', 'Pendaftaran2::store');
$routes->get('/profile', 'home::profile');
