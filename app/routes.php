 <?php

//Pages Routes
$router->get('', 'PagesController@home');
$router->get('products', 'PagesController@products');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->post('products/viewprod', 'PagesController@product');

//rota painel de controle
$router->get('admin', 'PagesController@restricArea');

//rota leva a listagem de produtos
$router->get('admin/productsadmin/products', 'ProductsController@index');

//rota leva a deleção
$router->post('admin/productsadmin/products/delete', 'ProductsController@delete');

//rota criagem de novos produtos
$router->get('admin/productsadmin/products/create', 'ProductsController@create');
$router->post('admin/productsadmin/products/create', 'ProductsController@store');

//rota view produtos
$router->post('admin/productsadmin/products/prod', 'ProductsController@show');

//rota leva ao formulario Editar Categoria
$router->get('admin/productsadmin/products/edit','ProductsController@showFormProductsEdit');

//rota edit produtos
$router->post('admin/productsadmin/products/edit', 'ProductsController@update');

