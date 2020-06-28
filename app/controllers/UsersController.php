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
        session_start();
        if(!isset($_SESSION['email'])){
            echo "<script>alert('Você precisa estar logado para acessar essa página!');</script>";
            return view('index');
        }else{
            $users = App::get('database')->selectAll('users');
            return view_admin_user('user', compact('users'));
        }
    }

    /**
     * Show create users page.
     */
    public function create()
    {
        if(!isset($_SESSION['email'])){
            echo "<script>alert('Você precisa estar logado para acessar essa página!');</script>";
            return view('index');
            
        }else{
            $users = App::get('database')->selectAll('users');
            return view_admin_user('createUser', compact('users'));
        }
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

        return header("location:" . "user");
    }

    public function delete()
    {
        App::get('database')->delete('users', $_POST['id']);
                
        return redirect('admin/user');
    }

    public function show()
    {
        session_start();
        if(!isset($_SESSION['email'])){
            echo "<script>alert('Você precisa estar logado para acessar essa página!');</script>";
            return view('index');
        }else{
            $user = App::get('database')->show('users', $_POST['id']);
            return view_admin_user('usershow', compact('user'));
        }
    }

    public function update(){
        app::get('database')->edit('users', [
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'password' => $_POST['password'] 
            ], 
            $id = $_POST['id']
        );

        return redirect('admin/user');
    }

    
    public function showFormUserEdit(){
        session_start();
        if(!isset($_SESSION['email'])){
            echo "<script>alert('Você precisa estar logado para acessar essa página!');</script>";
            return view('index');
        }else{
            $user = app::get('database')->show('users', $_GET['id']);
            return view('admin/user/formEditUser', compact('user'));
        }
    }
}
