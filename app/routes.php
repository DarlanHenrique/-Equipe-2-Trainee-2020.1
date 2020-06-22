 <?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

$router->get('admin/user', 'UsersController@index');
$router->get('admin/user/create', 'UsersController@create');
$router->post('admin/user', 'UsersController@store');

$router->post('admin/user/delete', 'UsersController@delete');
$router->post('admin/user/show', 'UsersController@show');
$router->post('admin/user/edit', 'UsersController@edit');
