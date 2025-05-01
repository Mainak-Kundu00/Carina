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
$routes->get('sign_up', 'Home::sign_up');
$routes->get('sign_in', 'Home::sign_in');
$routes->get('cart', 'Home::cart');
$routes->get('shop_now', 'Home::shop_now');
$routes->get('shop_now', 'Home::shop_now');
$routes->get('our_policy', 'Home::policy');
$routes->get('DbTest', 'DbTest::index');