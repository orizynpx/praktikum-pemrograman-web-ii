<?php

use CodeIgniter\Router\RouteCollection;

/**
 *  @var RouteCollection $routes
 */

$routes->get('/', 'AuthController::index');
$routes->get('/login', 'AuthController::index');
$routes->post('/login', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');

$routes->group('buku', ['filter' => 'auth'], function ($routes) {
    $routes->get('/', 'BukuController::index');
    $routes->get('create', 'BukuController::create');
    $routes->post('store', 'BukuController::store');
    $routes->get('edit/(:num)', 'BukuController::edit/$1');
    $routes->post('update/(:num)', 'BukuController::update/$1');
    $routes->get('delete/(:num)', 'BukuController::delete/$1');
});