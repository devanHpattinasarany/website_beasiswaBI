<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/pendaftar', 'Home::index');
$routes->get('/diterima', 'Home::diterima');
