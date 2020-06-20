 <?php

//Pages Routes
$router->get('', 'PagesController@home');
$router->get('produtos', 'PagesController@products');
$router->get('sobre', 'PagesController@about');
$router->get('contato', 'PagesController@contact');
$router->post('produtos/viewprod', 'PagesController@product');

//rota painel de controle
$router->get('admin', 'PagesController@restricArea');

//rota leva a listagem de produtos
$router->get('admin/products', 'ProductsController@index');

//rota leva a deleção
$router->post('admin/products/delete', 'ProductsController@delete');

//rota criagem de novos produtos
$router->get('admin/products/create', 'ProductsController@create');
$router->post('admin/products/create', 'ProductsController@store');

//rota view produtos
$router->post('admin/products/prod', 'ProductsController@show');

//rota edit produtos
$router->post('admin/products/edit', 'ProductsController@edit');