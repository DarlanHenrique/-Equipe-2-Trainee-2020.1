<?php

namespace App\Controllers;

use App\Core\App;

use App\User\User;

class LoginController
{
    //Mostra pagina de login.
    public function login(){

        return view('login');
    }
    
    public function check(){

        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = App::get('database')->validateLogin('users',$email);

        if (empty($user)){
            $message = array('Login inválido');
            return view('login', compact('message'));
        }
        if($user->password != $password) { 
            $message = array('Login inválido');
            return view('login', compact('message'));
        }
        else{
            session_start();
            $_SESSION['email'] = $email;
            return view_admin('homeadm');
        }
 
    }

    public function homeAdm(){

        return view_admin('homeadm');
    }

    public function logout(){
        session_start();
        session_destroy();
        return view_admin('login');
    }
}
    
