<?php

namespace App\Core\Database;

use PDO;

class QueryBuilder {

    protected $pdo;


    public function __construct($pdo){
        
        $this->pdo = $pdo;
    }


    public function selectAll($table)
    {
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
            echo "não foi possivel inserir no banco";
        }
    }

    public function edit($table, $parameters, $id){
        $sql = 'UPDATE `categories` SET `name`'.' = ' 
        . $parameters->name . ', `amount` = '. $parameters->amount 
        .', `gender` = '. $parameters->gender 
        ." WHERE `categories`.`id` = {$id}";

        $qry = $this->pdo->prepare($sql);
        $qry->execute();
        return $qry->fetch(PDO::FETCH_OBJ);

    }
    //UPDATE `categories` SET `name` = 'nome alterado', `amount` = '1545', `gender` = 'genero alterado' 
    //WHERE `categories`.`id` = 34

    public function delete($table, $id){
        $sql = "DELETE FROM " . $table . " WHERE id = :id";

        $qry = $this->pdo->prepare($sql);
        $qry->bindValue(":id", $id);
        $qry->execute();
    }

}
