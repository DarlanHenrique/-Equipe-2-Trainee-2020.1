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
        
    }

    public function delete($table, $id){
        $sql = "DELETE FROM " . $table . " WHERE id = :id";

        $qry = $this->pdo->prepare($sql);
        $qry->bindValue(":id", $id);
        $qry->execute();
    }
}
