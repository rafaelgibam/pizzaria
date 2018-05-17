<?php

namespace DAO;


class CozinheiroDAO extends Model implements ICrud
{

    protected $table = "cozinheiro";

    public function insert($obj)
    {
        $stmt = DB::getCon()->prepare("INSERT INTO {$this->table} (`CPF`, `RG`, `CNPJ`, `RAZAOSOCIAL`, `NOME`, `SEXO`, `DATA_NASC`, `NUM_FIXO`,
                                                                             `NUM_CELULAR`, `ESTADO`, `SALARIO`, `ENDERECO_ID` ) 
                                                 VALUES (?,?,?,?,?,?,?,?,?,?,?,?88)");


        $stmt->bindValue(1, $obj->getCpf());
        $stmt->bindValue(2, $obj->getRg());
        $stmt->bindValue(3, $obj->getCnpj());
        $stmt->bindValue(4, $obj->getRazaosocial());
        $stmt->bindValue(5, $obj->getNome());
        $stmt->bindValue(6, $obj->getSexo());
        $stmt->bindValue(7, $obj->getDtnasc());
        $stmt->bindValue(8, $obj->getNumfixo());
        $stmt->bindValue(9, $obj->getNumcel());
        $stmt->bindValue(10, $obj->getEstado());
        $stmt->bindValue(11, $obj->getSalario());
        $stmt->bindValue(12, $obj->getEndereco()->getId());

        $stmt->execute();
        $stmt->closeCursor();
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function update($id, $obj)
    {
        // TODO: Implement update() method.
    }
}