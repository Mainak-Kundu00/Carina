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
// $routes->get('quantity', 'Home::quantity');
$routes->get('quantity', 'Product::quantity');
$routes->get('Admin_panel', 'Home::Admin_panel');
$routes->get('add_product', 'Home::add_product');
$routes->get('delete_product', 'Home::delete_product');
$routes->get('ordered_product', 'Home::ordered_product');
$routes->get('update_product', 'Home::update_product');
$routes->get('profile', 'Home::profile');
$routes->get('profile_edit', 'Home::profile_edit');

$routes->get('logout', 'Create_user::logout');
$routes->get('Delete', 'Product::Delete');


$routes->post('sign_up', 'Create_user::add_user');
$routes->post('sign_in', 'Create_user::login');
$routes->post('add_product', 'Admin_product::index');
$routes->post('delete_product', 'Admin_product::delete');
$routes->post('update_product', 'Admin_product::update');
$routes->post('profile_edit', 'Create_user::update_user');
//$routes->post('rings', 'Product::quantity');
$routes->post('quantity', 'Product::product_data');



$routes->get('dbtest', 'DbTest::index');

