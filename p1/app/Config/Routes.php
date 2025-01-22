<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::index');
$routes->get('/dashboard', 'Auth::index');

$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::processRegister');

$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::processLogin');  // Perbaiki penamaan metode

$routes->get('/logout', 'Auth::logout');

$routes->get('/dashboard', 'Dashboard::index');

$routes->get('/menu', 'ReturnController::menu');
$routes->get('/order', 'ReturnController::order');
$routes->get('/promo', 'ReturnController::promo');

$routes->get('/admin', 'Admin::index');
$routes->get('/admin/create', 'Admin::create');
$routes->post('/admin/store', 'Admin::store');
$routes->get('/admin/edit/(:segment)', 'Admin::edit/$1');
$routes->post('/admin/update/(:segment)', 'Admin::update/$1');
$routes->get('/admin/delete/(:segment)', 'Admin::delete/$1');
