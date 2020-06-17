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
            'amount' => $_POST['amount'],
            'gender' => $_POST['gender']
        ]);

        return redirect('admin/categorias');
    }

    public function delete(){
        app::get('database')->delete('categories', $_POST['id']);

        return redirect('admin/categorias');
    }

    public function edit($id){
        app::get('database')->edit('categories', [
            'name' => $_POST['name'],
            'amount' => $_POST['amount'],
            'gender' => $_POST['gender']
        ] ,$_POST['id']);

        return redirect('admin/categorias');
    }

    //mostra Formulario de categorias.
    public function showFormCategories(){

        return view('admin/categories/formCategories');
    }

    public function showFormCategoriesEdit(){

        return view('admin/categories/formEditCategories');
    }


    public function view(){
        
    }
}