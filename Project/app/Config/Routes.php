<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;
use App\Controller\Create_user;

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
$routes->get('terms', 'Home::terms');
$routes->get('quantity', 'Home::quantity');

$routes->post('sign_up', 'Create_user::index');


$routes->get('dbtest', 'DbTest::index');

