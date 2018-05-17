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
        $stmt = DB::getCon()->prepare("SELECT * FROM {$this->table} WHERE ID = ?");
        $stmt->bindValue(1, $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function delete($id)
    {
        $stmt = DB::getCon()->prepare("DELETE FROM {$this->table} WHERE ID = ?");
        $stmt->bindValue(1, $id);
        $stmt->execute();
        $stmt->closeCursor();
    }
}