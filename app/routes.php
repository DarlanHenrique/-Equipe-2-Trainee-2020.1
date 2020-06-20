 <?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

$router->get('admin/usuarios', 'UsersController@index');
$router->get('admin/usuarios/criar', 'UsersController@create');
$router->post('admin/usuarios', 'UsersController@store');
