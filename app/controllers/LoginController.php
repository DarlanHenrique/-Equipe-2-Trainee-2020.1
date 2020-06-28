<?php

namespace App\Controllers;

use App\Core\App;

use App\User\User;

class LoginController
{
    //Mostra pagina de login.
    public function login(){
        session_start();
        if(!isset($_SESSION['email'])){
            return view('login');
        }else{
            return view_admin('homeadm');
        }
    }
    
    public function check(){

        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = App::get('database')->validateLogin('users',$email);

        if (empty($user)){
            echo "<script>alert('Digite um e-mail válido!');</script>";
            return view('login', compact('message'));
        }
        if($user->password != $password) { 
            echo "<script>alert('Senha inválida!');</script>";
            return view('login', compact('message'));
        }
        else{
            session_start();
            $_SESSION['email'] = $email;
            return view_admin('homeadm');
        }
 
    }

    public function homeAdm(){
        session_start();
        if(!isset($_SESSION['email'])){
            echo "<script>alert('Você precisa estar logado para acessar essa página!');</script>";
            return view('index');
        }else{
            return view_admin('homeadm');
        }
    }

    public function logout(){
        session_start();
        session_destroy();
        //return view('admin/login');
        return redirect('admin/login');
    }
}
    
