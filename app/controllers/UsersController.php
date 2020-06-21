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
        $users = App::get('database')->selectAll('users');

        return view_admin_user('user', compact('users'));
    }

    /**
     * Show create users page.
     */
    public function create()
    {
        $users = App::get('database')->selectAll('users');

        return view_admin_user('createUser', compact('users'));
    }

    /**
     * Store a new user in the database.
     */

    public function store()
    {
        App::get('database')->insert('users', [
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ]);

        return header("location:" . "usuarios");
    }

    public function delete()
    {
        App::get('database')->delete('users', $_POST['id']);
                
        return redirect('user');
    }

    public function show()
    
    {
        $user = App::get('database')->show('users', $_POST['id']);

        return view_admin_user('usershow', compact('user'));
    }

    // Functions for EDIT:
    public function edit()

    {
        App::get('database')->insert('users', [
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'password'=>$_POST['password']
        ]);

        return redirect('user/edit');
    }

}
