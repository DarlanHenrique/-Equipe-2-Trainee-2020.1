<?php

namespace App\Core\Database;

use PDO;

class QueryBuilder
{
    /**
     * The PDO instance.
     *
     * @var PDO
     */
    protected $pdo;

    /**
     * Create a new QueryBuilder instance.
     *
     * @param PDO $pdo
     */
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * Select all records from a database table.
     *
     * @param string $table
     */
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }


        /**
     * Select last three records from a database table.
     *
     * @param string $table
     */
    public function selectLastThree($table)
    {
        $statement = $this->pdo->prepare("select * from {$table} order by id desc limit 3");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    /**
     * Insert a record into a table.
     *
     * @param  string $table
     * @param  array  $parameters
     */
    public function insert($table, $parameters)
    {
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
            //
        }
    }


    public function delete($table, $id)
    {
        $sql = "DELETE FROM " . $table . " WHERE id = :id";

            $qry = $this->pdo->prepare($sql);
            $qry->bindValue(":id", $id);
            $qry->execute();
    }

    public function show($table, $id)
    {
        $sql = "SELECT * FROM " . $table . " WHERE id = {$id}";
           
            $qry = $this->pdo->prepare($sql);
            $qry->execute();
            return $qry->fetch(PDO::FETCH_OBJ);
    }

    public function product($table, $id)
    {
        $sql = "SELECT * FROM " . $table . " WHERE id = {$id}";
           
            $qry = $this->pdo->prepare($sql);
            $qry->execute();
            return $qry->fetch(PDO::FETCH_OBJ);
    }

      //Functions for EDIT.

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

    public function pagination($table, $parameters)
    {
         $statement = $this->pdo->prepare("SELECT * FROM " . $table . " LIMIT {$parameters}, 8");
 
             $statement->execute();
             return $statement->fetchAll(PDO::FETCH_CLASS);
    }

   public function searchCat($table, $id)
    {
        $sql = "SELECT * FROM " . $table . " WHERE categories = {$id}";

            $qry = $this->pdo->prepare($sql);
            $qry->execute();
            return $qry->fetchAll(PDO::FETCH_CLASS);
    }

    public function validateLogin($table,$email){
        $sql = "SELECT * FROM " . $table . " WHERE email = '{$email}'";
        $qry = $this->pdo->prepare($sql);
        $qry->execute();
        return $qry->fetch(PDO::FETCH_OBJ);

    }
}

