<?php


namespace DAO;


abstract class Model
{
    protected $table;

    public function findAll(){
       $stmt = DB::getCon()->prepare("SELECT * FROM {$this->table}");
       $stmt->execute();
       return $stmt->fetchAll();
    }

    public function find($id){
        $stmt = DB::getCon()->prepare("SELECT * FROM {$this->table} WHERE ID = :ID");
        $stmt->bindParam(":ID", $id);
        $stmt->execute();
        return $stmt->fetch();
    }
}