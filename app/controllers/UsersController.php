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

        return view('users', compact('users'));
    }

    /**
     * Show create users page.
     */
    public function create()
    {
        $users = App::get('database')->selectAll('users');

        return view_admin('createUser', compact('users'));
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
}
