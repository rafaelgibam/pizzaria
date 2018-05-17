<?php

namespace DAO;

class EnderecoDAO extends Model implements ICrud
{
    protected $table = "endereco";

    public function insert($obj)
    {
        $stmt = DB::getCon()->prepare("INSERT INTO {$this->table} (LOGRADOURO,NUMERO,COMPLEMENTO,BAIRRO,MUNICIPIO,UF,PAIS,REFERENCIA,CEP) 
                                                 VALUES (?,?,?,?,?,?,?,?,?)");

        $stmt->bindValue(1, $obj->getLogradouro());
        $stmt->bindValue(2, $obj->getNumero());
        $stmt->bindValue(3, $obj->getComplemento());
        $stmt->bindValue(4, $obj->getBairro());
        $stmt->bindValue(5, $obj->getMunicipio());
        $stmt->bindValue(6, $obj->getUf());
        $stmt->bindValue(7, $obj->getPais());
        $stmt->bindValue(8, $obj->getReferencia());
        $stmt->bindValue(9, $obj->getCep());

        $stmt->execute();
        $stmt->closeCursor();

    }

    public function delete($id)
    {
        $stmt = DB::getCon()->prepare("DELETE FROM {$this->table} WHERE ID = ?");
        $stmt->bindValue(1, $id);
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function update($id, $obj)
    {
        $stmt = DB::getCon()->prepare("UPDATE {$this->table}
                                                 SET LOGRADOURO = ?, NUMERO = ?, COMPLEMENTO = ?, BAIRRO = ?, MUNICIPIO = ?, UF = ?, PAIS = ?, REFERENCIA = ?, CEP = ?
                                                 WHERE ID = ?");
        $stmt->bindValue(1, $obj->getId());
        $stmt->bindValue(2, $obj->getLogradouro());
        $stmt->bindValue(3, $obj->getNumero());
        $stmt->bindValue(4, $obj->getComplemento());
        $stmt->bindValue(5, $obj->getBairro());
        $stmt->bindValue(6, $obj->getMunicipio());
        $stmt->bindValue(7, $obj->getUf());
        $stmt->bindValue(8, $obj->getPais());
        $stmt->bindValue(9, $obj->getReferencia());
        $stmt->bindValue(10, $obj->getCep());

        $stmt->execute();
        $stmt->closeCursor();
    }
}