 <?php

//Pages Routes
$router->get('', 'PagesController@home');
$router->get('products', 'PagesController@products');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->post('products/viewprod', 'PagesController@product');
$router->get('sobre', 'PagesController@about');
$router->get('contato', 'PagesController@contact');

//rota painel de controle
$router->get('admin', 'PagesController@restrictArea');

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

//rota lista de usuarios
$router->get('admin/user', 'UsersController@index');

//rota criar usuario
$router->get('admin/user/create', 'UsersController@create');
$router->post('admin/user', 'UsersController@store');

//rota  deletar usuario
$router->post('admin/user/delete', 'UsersController@delete');

//rota mostrar usuario
$router->post('admin/user/show', 'UsersController@show');

//rota editar usuario
$router->post('admin/user/edit', 'UsersController@update');
$router->get('admin/user/edit','UsersController@showFormUserEdit');

//inicio rota categorias

//rota leva ao formulario Adicionar Categoria
$router->get('admin/categorias/adicionar', 'CategoriesController@showFormCategories');
//rota leva ao formulario Editar Categoria
$router->get('admin/categorias/edit','CategoriesController@showFormCategoriesEdit');
//rota leva ao index de categorias
$router->get('admin/categorias', 'CategoriesController@listAllCategories');
//rota Insere dados no banco
$router->post('admin/categorias', 'CategoriesController@store');
//Rota Remove dados no banco
$router->post('admin/categorias/delete', 'CategoriesController@delete');
//rota edita dados no banco
$router->get('admin/categorias/{id}', 'CategoriesController@edit');

//Fim rota categorias

//Rota pagina de login
$router->get('admin/login', 'LoginController@login');
$router->post('admin/login/check', 'LoginController@check');
$router->post('admin/logout', 'LoginController@logout');

//Rota home administrativa
$router->get('admin/home', 'LoginController@homeAdm');
