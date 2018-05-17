<?php


namespace DAO;


abstract class Model
{
    protected $table;

    public function findAll(){
       $stmt = DB::getCon()->prepare("SELECT * FROM {$this->table}");
       $stmt->fetchAll();
       $stmt->closeCursor();
    }

    public function find($id){
        $stmt = DB::getCon()->prepare("SELECT * FROM {$this->table} WHERE ID = :ID");
        $stmt->bindParam(":ID", $id);
        $stmt->fetch();
        $stmt->closeCursor();
    }
}