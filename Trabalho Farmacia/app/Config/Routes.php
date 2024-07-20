<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/cadastro', 'Home::cadastro');
$routes->post('/cadastrar', 'Home::cadastrar');
