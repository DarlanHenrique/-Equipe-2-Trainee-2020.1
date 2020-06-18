<?php

namespace App\Controllers;

use App\Core\App;

class UsersController
{
    /**
     * Show all users.
     */
    public function index()
    {
        $users = App::get('database')->selectAll('userlist');

        return view('userlist', compact('userlist'));
    }

    
    public function create()
    {
        App::get('database')->insert('userlist', [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password'=>$_POST['password']
        ]);

        return redirect('userlist');
    }
    public function delete()
    {
        App::get('database')->delete('userlist', $_POST['id']);
                
        return redirect('userlist');
    }
}

