<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
$routes->get('/', 'home::beranda');
$routes->get('produk', 'home::produk');
$routes->get('maggotech', 'home::maggotech');
