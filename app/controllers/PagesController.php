<?php

namespace App\Controllers;

use App\Core\App;

class PagesController {
    /**
     * Show the home page.
     */
    public function home() {

        return view('index');
    }

    //Mostra pagina de produtos.
    public function products() {

        $products = App::get('database')->selectAll('products');

        return view('pgvendas', compact('products'));
    }

    //Mostra pagina do Produto.
     public function product() {

        $product = App::get('database')->show('products', $_POST['id']);

        return view('view-product', compact('product'));
    }


    //mostra pagina Quem somos.
    public function about() {

        return view('quemSomos');
    }
  
    //mostra pagina de contato.
    public function contact(){

        return view('contato');
    }

    //mostra pagina de listagem de usuarios.
    public function users(){

        return view('admin/user/users');
    }

    //mostra pagina da area Restrita.
    public function restricArea(){

        return view('admin/homeadm');
    }

    

}
