<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);

$routes->setAutoRoute(true);

$routes->get('/', 'Home::index');
$routes->get('/profile', 'Home::profile');
$routes->get('/produk', 'Home::produk');
$routes->get('/kontak', 'Home::kontak');
$routes->get('/about', 'Home::about');
$routes->get('/visi', 'Home::visi');
$routes->get('/event', 'Home::event');
$routes->get('/galeri', 'Home::galeri');
$routes->get('/klien', 'Home::klien');
$routes->get('/artikel', 'Home::artikel');

$routes->add('admin/logout', 'Login::logout');

// $routes->group('admin', ['filter' => 'noadmin'], function ($routes) {
//     $routes->add('', 'admin\Login::login');
//     $routes->add('login', 'admin\Login::login');
//     $routes->add('lupapassword', 'admin\Login::lupapassword');
//     $routes->add('resetpassword', 'admin\Login::resetpassword');
// });
