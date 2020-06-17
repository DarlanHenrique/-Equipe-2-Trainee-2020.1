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

        return view('admin/products', compact('products'));
    }
    public function create()
    {
        $products = App::get('database')->selectAll('products');

        return view('admin/create', compact('products'));
    }
    public function store()
        {
        App::get('database')->insert('products', [
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'category' => $_POST['category'],
                'details' => $_POST['details'],
                'description' => $_POST['description']
            ]);
    
            return redirect('admin/products');
        }

    public function delete()
    {
       
       App::get('database')->delete('products', $_POST['id']);
    
       return redirect('admin/products');
    }

 
    public function show()
    
    {
        $product = App::get('database')->show('products', $_POST['id']);

        return view('admin/prod', compact('product'));
    }

}