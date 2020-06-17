 <?php

//Pages Routes
$router->get('', 'PagesController@home');
$router->get('produtos', 'PagesController@products');
$router->get('sobre', 'PagesController@about');
$router->get('contato', 'PagesController@contact');

//rota painel de controle
$router->get('admin', 'PagesController@restricArea');

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