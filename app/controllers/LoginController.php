<?php

namespace App\Controllers;

use App\Core\App;

use App\User\User;

class LoginController
{
    //Mostra pagina de login.
    public function login(){
        
        require  __DIR__ . "/../model/User.php";

        return view_admin('login');
    }
    
    public function check(){

        require  __DIR__ . "/../model/User.php";

        try{
            $user = new User;
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            $user->validateLogin();

            header('Location: home');
        }catch(\Exception $e){
            header('Location: login');
        }
    }

    public function homeAdm(){

        return view_admin('homeadm');
    }
}
    
