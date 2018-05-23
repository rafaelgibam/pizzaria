<?php

namespace DAO;

class EnderecoDAO extends Model implements ICrud
{
    protected $table = "endereco";

    public function insert($obj)
    {
        $stmt = DB::getCon()->prepare("INSERT INTO {$this->table} (LOGRADOURO,NUMERO,COMPLEMENTO,BAIRRO,MUNICIPIO,UF,PAIS,REFERENCIA,CEP, CLIENTE_ID) 
                                                 VALUES (?,?,?,?,?,?,?,?,?,?)");

        $stmt->bindValue(1, $obj->getLogradouro());
        $stmt->bindValue(2, $obj->getNumero());
        $stmt->bindValue(3, $obj->getComplemento());
        $stmt->bindValue(4, $obj->getBairro());
        $stmt->bindValue(5, $obj->getMunicipio());
        $stmt->bindValue(6, $obj->getUf());
        $stmt->bindValue(7, $obj->getPais());
        $stmt->bindValue(8, $obj->getReferencia());
        $stmt->bindValue(9, $obj->getCep());
        $stmt->bindValue(10, $obj->getCliente()->getId());

        $stmt->execute();
        $stmt->closeCursor();

    }

    public function update($obj)
    {
        $stmt = DB::getCon()->prepare("UPDATE {$this->table}
                                                 SET LOGRADOURO = ?, NUMERO = ?, COMPLEMENTO = ?, BAIRRO = ?, MUNICIPIO = ?, UF = ?, PAIS = ?, REFERENCIA = ?, CEP = ?, CLIENTE_ID = ?
                                                 WHERE ID = ?");


        $stmt->bindValue(1, $obj->getLogradouro());
        $stmt->bindValue(2, $obj->getNumero());
        $stmt->bindValue(3, $obj->getComplemento());
        $stmt->bindValue(4, $obj->getBairro());
        $stmt->bindValue(5, $obj->getMunicipio());
        $stmt->bindValue(6, $obj->getUf());
        $stmt->bindValue(7, $obj->getPais());
        $stmt->bindValue(8, $obj->getReferencia());
        $stmt->bindValue(9, $obj->getCep());
        $stmt->bindValue(10, $obj->getCliente()->getId());
        $stmt->bindValue(11, $obj->getId());

        $stmt->execute();
        $stmt->closeCursor();
    }
}