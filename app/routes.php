 <?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');

$router->get('products/create', 'ProductsController@create');
$router->post('products/create', 'ProductsController@store');
