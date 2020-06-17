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
                'description' => $_POST['description'],
                'image' => $_POST['image']
            ]);
    
            return redirect('admin/products');
        }

    public function delete()
    {
       
       App::get('database')->delete('products', $_POST['id']);
    
       return redirect('admin/products');
    }

    public function select()
    {
        $products = App::get('database')->selectAll('products', $_POST['id']);

        return view('admin/select', compact('products'));
    }
}