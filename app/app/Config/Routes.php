<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

// $routes->get('/db-test', 'DbTest::index'); 

// // Route untuk produk   
// $routes->get('/produk', 'Produk::index');

$routes->resource('produk', [
    'controller' => 'ProdukController',
]);