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
        $users = App::get('database')->selectAll('products');

        return view('index', compact('products'));
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
}
