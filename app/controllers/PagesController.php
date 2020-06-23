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

        return view('site/index', compact('products'));
    }

    /**
     * Show the about page.
     */
    public function about()
    {
        $company = 'Laracasts';

        return view('about', ['company' => $company]);
    }

    /**
     * Show the contact page.
     */
    public function contact()
    {
        return view('contact');
    }
    public function restrictArea(){

        return view('admin/homeadm');
    }
}
