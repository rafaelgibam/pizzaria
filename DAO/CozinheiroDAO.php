<?php

namespace DAO;

class CozinheiroDAO extends Model implements ICrud
{

    protected $table = "cozinheiro";

    public function insert($obj)
    {
        $stmt = DB::getCon()->prepare("INSERT INTO {$this->table} (`CNPJ`, `RAZAOSOCIAL`, `NOME`, `SEXO`, `DATA_NASC`, 
                                                                            `NUM_FIXO`,`NUM_CELULAR`,`ESTADO`,`ENDERECO_ID`) 
                                                                            VALUES (?,?,?,?,?,?,?,?,?)");
        $stmt->bindValue(1, $obj->getCnpj());
        $stmt->bindValue(2, $obj->getRazaosocial());
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
                                                 SET CNPJ = ?, RAZAOSOCIAL = ?, NOME = ?, SEXO = ?, DATA_NASC = ?, NUM_FIXO = ?, NUM_CELULAR = ?, ESTADO = ?, ENDERECO_ID = ?
                                                 WHERE ID = ?");


        $stmt->bindValue(1, $obj->getCnpj());
        $stmt->bindValue(2, $obj->getRazaosocial());
        $stmt->bindValue(3, $obj->getNome());
        $stmt->bindValue(4, $obj->getSexo());
        $stmt->bindValue(5, $obj->getDtnasc());
        $stmt->bindValue(6, $obj->getNumfixo());
        $stmt->bindValue(7, $obj->getNumcel());
        $stmt->bindValue(8, $obj->getEstado());
        $stmt->bindValue(9, $obj->getEndereco()->getId());
        $stmt->bindValue(10, $obj->getId());

        $stmt->execute();
        $stmt->closeCursor();
    }
}