<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/orden-compra', 'OrdenCompra::index');
$routes->get('/recolecta', 'Recolecta::index');
$routes->get('/pagos', 'Pagos::index');