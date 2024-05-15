<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

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

