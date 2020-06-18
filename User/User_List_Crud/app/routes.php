 <?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');

$router->get('userlist', 'UsersController@index');
$router->post('userlist', 'UsersController@create');
$router->post('userlist', 'UsersController@delete');

