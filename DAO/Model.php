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

    public function findName($nome){
          $stmt = DB::getCon()->prepare("SELECT * FROM {$this->table} WHERE NOME LIKE ? OR CPF LIKE ?");
          $stmt->bindValue(1, "%" . $nome . "%");
          $stmt->bindValue(2, "%". $nome ."%");
          $stmt->bindValue(3, "%" . $nome . "%");
          $stmt->execute();
          return $stmt->fetchAll();
    }

    public function findEndress($endereco){
        $stmt = DB::getCon()->prepare("SELECT * FROM {$this->table} WHERE LOGRADOURO LIKE ?");
        $stmt->bindValue(1, "%" . $endereco . "%");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
