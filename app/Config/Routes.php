<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


// students routes
// /url,   controller::function
$routes->get('/students', 'StudentsController::index');
$routes->get('/students/create', 'StudentsController::createStudent');
$routes->post('/students/store', 'StudentsController::storeStudent');
$routes->get('/students/edit/(:num)', 'StudentsController::editStudent/$1');
$routes->get('/students/update/(:num)', 'StudentsController::updateStudent/$1');
$routes->get('/students/delete/(:num)', 'StudentsController::deleteStudent/$1');







//  user homepage
$routes->get('/', 'Home::index');
$routes->get('/homepage', 'Home::homepage');
$routes->get('/homepage/(:any)', 'Home::hm/$1');

// user shop
$routes->get('/shop', 'Shop::index');
$routes->get('/shop/product', 'Shop::product');
$routes->add('shop/product/(:any)/(:any)', 'Shop::product/$1/$2');

// user blog
$routes->get('/blog', 'Blog::index');
$routes->get('/blog/post', 'Blog::post');
$routes->get('/blog/new', 'Blog::new');
$routes->post('/blog/new', 'Blog::new');

// routes format 
// '/url', 'folderlocation::function name'

$routes->group('admin', function($routes){
    // users
    $routes->add('user', 'Admin\Users::index');
    $routes->add('users', 'Admin\Users::getAllUsers');

    // shop
    $routes->add('shop', 'Admin\Shop::index');
    $routes->add('shop/product/(:any)/(:any)', 'Admin\Shop::product/$1/$2');

    // blog 
    $routes->add('blog', 'Admin\Blog::index');
    $routes->get('blog/new', 'Admin\Blog::createNew');
    $routes->post('blog/new', 'Admin\Blog::saveBlog');
});

