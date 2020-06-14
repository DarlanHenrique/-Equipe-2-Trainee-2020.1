<?php

namespace App\Controllers;

use App\Core\App;

class ProductsController
{
    /**
     * Show all users.
     */
    public function index()
    {
        $products = App::get('database')->selectAll('products');

        return view('products', compact('products'));
    }
    public function create()
    {
        App::get('database')->insert('products', [
            'nome' => $_POST['nome'],
            'preco' => $_POST['preco'],
            'categoria' => $_POST['categoria'],
            'detalhes' => $_POST['detalhes'],
            'descricao' => $_POST['descricao']
        ]);
        return redirect('products');
    }
    public function store()
        {
        App::get('database')->insert('products', [
                'nome' => $_POST['nome'],
                'preco' => $_POST['preco'],
                'categoria' => $_POST['categoria'],
                'detalhes' => $_POST['detalhes'],
                'descricao' => $_POST['descricao']
            ]);
    
            return redirect('products');
        }

    
}
