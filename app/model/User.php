<?php

namespace App\User;

use App\Core\App;

use App\Core\Database\QueryBuilder;

    class User{

        private $id;
        private $username;
        private $email;
        private $password;

        public function validateLogin(){
            $sql = App::get('database')->selectUser();
            $qry = $this->pdo->prepare($sql);
            $qry->bindValue('email', $this->email);
            $qry->execute();

            if ($qry->rowCount()){
                $result = $qry->fetch();

                if ($result['password'] === $this->password){
                    $_SESSION['usr'] = $result['id'];

                    return true;
                }
            }

            throw new \Exception('Login inválido');


        }


        public function setEmail($email){
            $this->email = $email;
        }
        public function setUsername($username){
            $this->username = $username;
        }
        public function setPassword($password){
            $this->password = $password;
        }

        public function getEmail(){
            return $this->email;
        }
        public function getUsername(){
            return $this->username;
        }
        public function getPassword(){
            return $this->password;
        }


    }
