<?php
/**
 * Created by PhpStorm.
 * User: rafaelgibam
 * Date: 17/05/2018
 * Time: 15:14
 */

namespace DAO;


class ClienteDAO extends Model implements ICrud
{

    protected $table = "cliente";

    public function insert($obj)
    {
        $stmt = DB::getCon()->prepare("INSERT INTO {$this->table} (`CPF`,`RG`, `NOME`, `SEXO`, `DATA_NASC`, `NUM_FIXO`, `NUM_CELULAR`, `ESTADO`, `ENDERECO_ID`) 
                                                 VALUES (?,?,?,?,?,?,?,?,?)");

        $stmt->bindValue(1, $obj->getCpf());
        $stmt->bindValue(2, $obj->getRg());
        $stmt->bindValue(3, $obj->getNome());
        $stmt->bindValue(4, $obj->getSexo());
        $stmt->bindValue(5, $obj->getDtnasc());
        $stmt->bindValue(6, $obj->getNumfixo());
        $stmt->bindValue(7, $obj->getNumcel());
        $stmt->bindValue(8, $obj->getEstado());
        $stmt->bindValue(9, $obj->getEndereco()->getId());

        $stmt->execute();
        $stmt->closeCursor();

    }

    public function update($obj)
    {
        $stmt = DB::getCon()->prepare("UPDATE {$this->table}
                                                 SET CPF = ?, RG = ?, NOME = ?, SEXO = ?, DATA_NASC = ?, UF = ?, PAIS = ?, REFERENCIA = ?, CEP = ?
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
        $stmt->bindValue(10, $obj->getId());

        $stmt->execute();
        $stmt->closeCursor();
    }
}