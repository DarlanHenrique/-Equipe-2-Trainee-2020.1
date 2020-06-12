<?php

namespace App\Controllers;

use App\Core\App;

class ProductsController
{
    /**
     * Show all products.
     */
    public function index()
    {
        $products = App::get('database')->selectAll('products');

        return view('products', compact('products'));
    }
    public function create() 
    {
        App::get('database')->insert('products', 
        [
            'nome' => $_POST['nome'],
            'preco' => $_POST['preco']
        ]);
        
        return redirect('products');
    }

    public function delete()
    {
       
       App::get('database')->delete('products', $_POST['id']);
    
       return redirect('products');
    }

}