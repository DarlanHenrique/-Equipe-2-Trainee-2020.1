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
        //if(!isset($_SESSION)){
        //    header("Location: index.view.php");;
        //}else{
            return view('admin/homeadm');
        //}
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

}
