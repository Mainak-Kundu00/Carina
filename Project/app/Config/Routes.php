<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about', 'Home::about');
$routes->get('rings', 'Home::rings');
$routes->get('necklaces', 'Home::necklaces');
$routes->get('jewelry', 'Home::jewelry');
