 <?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

$router->get('user', 'UsersController@index');
$router->post('user', 'UsersController@create');
$router->post('user/delete', 'UsersController@delete');

$router->post('user/show', 'UsersController@show');

$router->post('user/edit', 'UsersController@edit');