<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'home::beranda');
$routes->get('ecolocator', 'home::ecolocator');
$routes->get('maggotect', 'home::maggotect');
$routes->get('produk', 'home::produk');
$routes->get('zakatin', 'home::zakatin');
$routes->get('smartgot', 'home::smartgot');
$routes->get('testimoni', 'home::testimoni');
