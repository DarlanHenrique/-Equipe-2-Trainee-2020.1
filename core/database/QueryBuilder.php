<?php

namespace App\Core\Database;

use PDO;

class QueryBuilder {

    protected $pdo;


    public function __construct($pdo){
        
        $this->pdo = $pdo;
    }


    public function selectAll($table){
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters){
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))

        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (\Exception $e) {
            echo "não foi possivel inserir no banco " .$e;
        }
    }

    public function edit($table, $parameters, $id){
        $counter = 1;
        $sql = "update " . $table. " set "; 
            foreach($parameters as $key => $value){
                if($counter == count($parameters)){
                    $sql .= $key . " = '" . $value . "'";
                
                }else {
                    $sql .= $key . " = '" . $value . "' ,";
                }
                $counter += 1;
            }
        $sql .= " where id = {$id}";
        
        try {
            
            $qry = $this->pdo->prepare($sql);
            $qry->execute($parameters);

        } catch (\Exception $e) {
            echo "não foi possivel alterar informações no banco " .$e->getMessage();
        }
       

    }

    public function delete($table, $id){
        $sql = "DELETE FROM " . $table . " WHERE id = :id";


        try{
            $qry = $this->pdo->prepare($sql);
            $qry->bindValue(":id", $id);
            $qry->execute();

        } catch (\Exception $e) {
            echo "não foi possivel excluir informações do banco " .$e->getMessage();
        }
    }

    public function show($table, $id){
        $sql = "SELECT * FROM " . $table . " WHERE id = {$id}";
              
        $qry = $this->pdo->prepare($sql);
        $qry->execute();
        return $qry->fetch(PDO::FETCH_OBJ);
    }
}
