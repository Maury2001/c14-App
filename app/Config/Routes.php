<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\News;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('shop', 'Shop::index');

use App\Controllers\Pages;

$routes->get('pages', [Pages::class, 'index']);


$routes->get('news',[News::class, 'index']);
$routes->get('new', [News::class, 'new']); // Add this line
$routes->post('news', [News::class, 'create']); // Add this line


$routes->get('news/(:segment)', [News::class, 'show']);
$routes->get('(:segment)', [Pages::class, 'view']);
