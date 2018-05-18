<?php

namespace DAO;

class MotoBoyDAO extends Model implements ICrud
{
    protected $table = "motoboy";

    public function insert($obj)
    {
        $stmt = DB::getCon()->prepare("INSERT INTO {$this->table} (`CPF`,`RG`,`NOME`,`SEXO`,`DATA_NASC`,`NUM_FIXO`,
                                                `NUM_CELULAR`,`ESTADO`,`DATA_ADMISSAO`,`SALARIO`, `PLACA`,`ENDERECO_ID`)
                                                 VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");


        $stmt->bindValue(1, $obj->getCpf());
        $stmt->bindValue(2, $obj->getRg());
        $stmt->bindValue(3, $obj->getNome());
        $stmt->bindValue(4, $obj->getSexo());
        $stmt->bindValue(5, $obj->getDtnasc());
        $stmt->bindValue(6, $obj->getNumfixo());
        $stmt->bindValue(7, $obj->getNumcel());
        $stmt->bindValue(8, $obj->getEstado());
        $stmt->bindValue(9, $obj->getDtadmissao());
        $stmt->bindValue(10, $obj->getSalario());
        $stmt->bindValue(11, $obj->getPlaca());
        $stmt->bindValue(12, $obj->getEndereco()->getId());

        $stmt->execute();
        $stmt->closeCursor();
    }

    public function update($obj)
    {
        $stmt = DB::getCon()->prepare("UPDATE {$this->table}
                                                 SET CPF = ?, RG = ?, NOME = ?, SEXO = ?, DATA_NASC = ?, NUM_FIXO = ?, 
                                                 NUM_CELULAR = ?, ESTADO = ?, DATA_ADMISSAO = ?, SALARIO = ?, PLACA = ?, ENDERECO_ID = ?
                                                 WHERE ID = ?");


        $stmt->bindValue(1, $obj->getCpf());
        $stmt->bindValue(2, $obj->getRg());
        $stmt->bindValue(3, $obj->getNome());
        $stmt->bindValue(4, $obj->getSexo());
        $stmt->bindValue(5, $obj->getDtnasc());
        $stmt->bindValue(6, $obj->getNumfixo());
        $stmt->bindValue(7, $obj->getNumcel());
        $stmt->bindValue(8, $obj->getEstado());
        $stmt->bindValue(9, $obj->getDtadmissao());
        $stmt->bindValue(10, $obj->getSalario());
        $stmt->bindValue(11, $obj->getPlaca());
        $stmt->bindValue(12, $obj->getEndereco()->getId());

        $stmt->execute();
        $stmt->closeCursor();
    }
}