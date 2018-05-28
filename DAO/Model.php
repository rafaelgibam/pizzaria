<?php


namespace DAO;


abstract class Model
{
    protected $table;
    protected $colunalike;

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

    public function like($nome){
        $stmt = DB::getCon()->prepare("SELECT * FROM {$this->table} WHERE {$this->colunalike} LIKE '%?%'");
        $stmt->bindValue(1, $nome);
        $stmt->execute();
        return $stmt->fetch();
    }
}