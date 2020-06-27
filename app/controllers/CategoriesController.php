<?php

namespace App\Controllers;

use App\Core\App;

class CategoriesController {
    /**
     * Show all categories.
     */
    public function listAllCategories() {

        $categories = App::get('database')->selectAll('categories');

        

        return view('admin/categories/categories', compact('categories'));
    }


    /**
     * Store a new category in the database.
     */
    public function store(){

        App::get('database')->insert('categories', [
            'name' => $_POST['name'],
        ]);

        return redirect('admin/categories');
    }

    public function delete(){
        app::get('database')->delete('categories', $_POST['id']);

        return redirect('admin/categories');
    }


    public function update(){
        app::get('database')->edit(
            'categories', [
                'name' => $_POST['name'], 
            ], 
            $id = $_POST['id']
        );

        return redirect('admin/categories');
    }

    //mostra Formulario de categorias.
    public function showFormCategories(){

        return view('admin/categories/formCategories');
    }

    public function showFormCategoriesEdit(){

        $category = app::get('database')->show('categories', $_GET['id']);

        return view('admin/categories/formEditCategories', compact('category'));
    }

    
}