 <?php

//Pages Routes
$router->get('', 'PagesController@home');
$router->get('produtos', 'PagesController@products');
$router->get('sobre', 'PagesController@about');
$router->get('contato', 'PagesController@contact');

//rota painel de controle
$router->get('admin', 'PagesController@restricArea');

//rota leva a listagem de produtos
$router->get('admin/products', 'ProductsController@index');
$router->post('admin/products/delete', 'ProductsController@delete');

//rota criagem de novos produtos
$router->get('admin/products/create', 'ProductsController@create');
$router->post('admin/products/create', 'ProductsController@store');

//rota view produtos
$router->get('admin/products/prod', 'ProductsController@prod');
