<?php


namespace DAO;


class GarcomDAO extends Model implements ICrud
{

    protected $table = "GARCOM";

    public function insert($obj)
    {
        $stmt = DB::getCon()->prepare("INSERT INTO {$this->table} (`CPF`,`RG`,`NOME`,`SEXO`,`DATA_NASC`,`NUM_FIXO`,
                                                `NUM_CELULAR`,`ESTADO`,`GORJETA`,`DATA_ADMISSAO`,`SALARIO`,`LOGRADOURO`, `NUMERO`, `COMPLEMENTO`,
                                                `BAIRRO`, `MUNICIPIO`, `UF`, `PAIS`, `REFERENCIA`, `CEP`)
                                                 VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

        $stmt->bindValue(1, $obj->getCpf());
        $stmt->bindValue(2, $obj->getRg());
        $stmt->bindValue(3, $obj->getNome());
        $stmt->bindValue(4, $obj->getSexo());
        $stmt->bindValue(5, $obj->getDtnasc());
        $stmt->bindValue(6, $obj->getNumfixo());
        $stmt->bindValue(7, $obj->getNumcel());
        $stmt->bindValue(8, $obj->getEstado());
        $stmt->bindValue(9, $obj->getGorjeta());
        $stmt->bindValue(10, $obj->getDtadmissao());
        $stmt->bindValue(11, $obj->getSalario());
        $stmt->bindValue(12, $obj->getLogradouro());
        $stmt->bindValue(13, $obj->getNumero());
        $stmt->bindValue(14, $obj->getComplemento());
        $stmt->bindValue(15, $obj->getBairro());
        $stmt->bindValue(16, $obj->getMunicipio());
        $stmt->bindValue(17, $obj->getUf());
        $stmt->bindValue(18, $obj->getPais());
        $stmt->bindValue(19, $obj->getReferencia());
        $stmt->bindValue(20, $obj->getCep());

        $stmt->execute();
        $stmt->closeCursor();
    }

    public function update($obj)
    {
        $stmt = DB::getCon()->prepare("UPDATE {$this->table}
                                                 SET CPF = ?, RG = ?, NOME = ?, SEXO = ?, DATA_NASC = ?, NUM_FIXO = ?,
                                                 NUM_CELULAR = ?, ESTADO = ?, GORJETA = ?, DATA_ADMISSAO = ?, SALARIO = ?,
                                                 LOGRADOURO = ?, NUMERO = ?, COMPLEMENTO = ?, BAIRRO = ?, MUNICIPIO = ?, UF = ?,
                                                 PAIS = ?, REFERENCIA = ?, CEP = ?
                                                 WHERE ID = ?");

        $stmt->bindValue(1, $obj->getCpf());
        $stmt->bindValue(2, $obj->getRg());
        $stmt->bindValue(3, $obj->getNome());
        $stmt->bindValue(4, $obj->getSexo());
        $stmt->bindValue(5, $obj->getDtnasc());
        $stmt->bindValue(6, $obj->getNumfixo());
        $stmt->bindValue(7, $obj->getNumcel());
        $stmt->bindValue(8, $obj->getEstado());
        $stmt->bindValue(9, $obj->getGorjeta());
        $stmt->bindValue(10, $obj->getDtadmissao());
        $stmt->bindValue(11, $obj->getSalario());
        $stmt->bindValue(12, $obj->getLogradouro());
        $stmt->bindValue(13, $obj->getNumero());
        $stmt->bindValue(14, $obj->getComplemento());
        $stmt->bindValue(15, $obj->getBairro());
        $stmt->bindValue(16, $obj->getMunicipio());
        $stmt->bindValue(17, $obj->getUf());
        $stmt->bindValue(18, $obj->getPais());
        $stmt->bindValue(19, $obj->getReferencia());
        $stmt->bindValue(20, $obj->getCep());
        $stmt->bindValue(21, $obj->getId());

        $stmt->execute();
        $stmt->closeCursor();
    }
}
