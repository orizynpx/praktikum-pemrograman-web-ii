<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Pages::index');
// $routes->get('/home', 'ProfileController::index');
$routes->get('/profile', 'Pages::profile');