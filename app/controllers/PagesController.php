<?php

namespace App\Controllers;

use App\Core\App;


class PagesController
{
    /**
     * Show the home page.
     */
    public function home()
    {
        $products = App::get('database')->selectLastThree('products');

        return view('index', compact('products'));
    }
  
    //mostra pagina de contato.
    public function contact(){

        return view('contato');
    }

    public function restrictArea(){

        return view('admin/homeadm');
    }
  
      //Mostra pagina de produtos.
    public function products() {

        $products = App::get('database')->selectAll('products');
        $pagination = App::get('database')->pagination('products', 0);
        $categories = App::get('database')->selectAll('categories');

        return view('pgvendas', compact('products', 'pagination', 'categories'));
    }

    //pagination
    public function pagination() {

        $products = App::get('database')->selectAll('products');
        $pagination = App::get('database')->pagination('products', $_GET['pag']);
        $categories = App::get('database')->selectAll('categories');

        return view('pgvendas', compact('products', 'pagination', 'categories'));
    }
    
    //categoria
    public function category() {

        $products = App::get('database')->searchCat('products', $_POST['id']);

        $categories = App::get('database')->selectAll('categories');

        return view('prodcat', compact('products','categories'));
    }

    //Mostra pagina do Produto.
    public function product() {

        $product = App::get('database')->show('products', $_POST['id']);
        $categories = App::get('database')->selectAll('categories');

        return view('view-product', compact('product','categories'));
    }


    //mostra pagina Quem somos.
    public function about() {

        return view('quemSomos');
    }

     //mostra pagina Login.
     public function login() {

        return view('login');
    }

}
