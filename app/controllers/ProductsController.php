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

        return view('admin/productsadmin/products', compact('products'));
    }

    public function create()
    {
        $products = App::get('database')->selectAll('products');

        return view('admin/productsadmin/create', compact('products'));
    }
    public function store()
        {
            if(isset($_FILES['image'])){
                $extensao = strtolower(substr($_FILES['image']['name'], -4));
                $novo_nome = md5(time()) . $extensao;
                $diretorio = "/public/img/";

                move_uploaded_file($_FILES['image']['tpm_name'], $diretorio.$novo_nome);
            }
            // $url_image = isset($_POST["url_image"]) ? strip_tags(filter_input(INPUT_POST, "url_image")) : NULL;

            App::get('database')->insert('products', [
                    'name' => $_POST['name'],
                    'price' => $_POST['price'],
                    'gender' => $_POST['gender'],
                    'category' => $_POST['category'],
                    'details' => $_POST['details'],
                    'description' => $_POST['description'],
                    'image' => $_POST['image']
                ]);
    
            return redirect('admin/productsadmin/products');
        }

    public function delete()
    {
       
       App::get('database')->delete('products', $_POST['id']);
    
       return redirect('admin/productsadmin/products');
    }

    public function show()
    
    {
        $product = App::get('database')->show('products', $_POST['id']);

        return view('admin/productsadmin/prod', compact('product'));
    }

    public function update(){
        app::get('database')->edit(
            'Products', [
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'gender' => $_POST['gender'],
                'category' => $_POST['category'],
                'details' => $_POST['details'],
                'description' => $_POST['description'],
            ], 
            $id = $_POST['id']
        );

        return redirect('admin/productsadmin/products');
    }

    public function showFormProductsEdit(){

        $product = app::get('database')->show('products', $_GET['id']);

        return view('admin/productsadmin/formEditProducts', compact('product'));
    }

}