<?php

namespace DAO;

class CozinheiroDAO extends Model implements ICrud
{

    protected $table = "COZINHEIRO";

    public function insert($obj)
    {
        // ID	CNPJ	RAZAOSOCIAL	NOME	SEXO	DATA_NASC	NUM_FIXO	NUM_CELULAR	ESTADO	SALARIO	ENDERECO_ID


        $stmt = DB::getCon()->prepare("INSERT INTO {$this->table} (`CPF`, `RG`, `NOME`, `SEXO`, `DATA_NASC`,
                                                                            `NUM_FIXO`,`NUM_CELULAR`, SALARIO, DATA_ADMISSAO, `ESTADO`,
                                                                            `LOGRADOURO`, `NUMERO`, `COMPLEMENTO`, `BAIRRO`, `MUNICIPIO`, `UF`, `PAIS`, `REFERENCIA` )
                                                                             VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bindValue(1, $obj->getCpf());
        $stmt->bindValue(2, $obj->getRg());
        $stmt->bindValue(3, $obj->getNome());
        $stmt->bindValue(4, $obj->getSexo());
        $stmt->bindValue(5, $obj->getDtnasc());
        $stmt->bindValue(6, $obj->getNumfixo());
        $stmt->bindValue(7, $obj->getNumcel());
        $stmt->bindValue(8, $obj->getSalario());
        $stmt->bindValue(9, $obj->getDtadmissao());
        $stmt->bindValue(10, $obj->getEstado());
        $stmt->bindValue(11, $obj->getLogradouro());
        $stmt->bindValue(12, $obj->getNumero());
        $stmt->bindValue(13, $obj->getComplemento());
        $stmt->bindValue(14, $obj->getBairro());
        $stmt->bindValue(15, $obj->getMunicipio());
        $stmt->bindValue(16, $obj->getUf());
        $stmt->bindValue(17, $obj->getPais());
        $stmt->bindValue(18, $obj->getReferencia());

        $stmt->execute();
        $stmt->closeCursor();
    }

    public function update($obj)
    {
        $stmt = DB::getCon()->prepare("UPDATE {$this->table}
                                                 SET CPF = ?, RG = ?, NOME = ?, SEXO = ?, DATA_NASC = ?, NUM_FIXO = ?,
                                                 NUM_CELULAR = ?, SALARIO = ?, DATA_ADMISSAO = ?, ESTADO = ?, LOGRADOURO = ?,
                                                 NUMERO = ?, COMPLEMENTO = ?, BAIRRO = ?, MUNICIPIO = ?, UF = ?, PAIS = ?, REFERENCIA = ?
                                                 WHERE ID = ?");


        $stmt->bindValue(1, $obj->getCpf());
        $stmt->bindValue(2, $obj->getRg());
        $stmt->bindValue(3, $obj->getNome());
        $stmt->bindValue(4, $obj->getSexo());
        $stmt->bindValue(5, $obj->getDtnasc());
        $stmt->bindValue(6, $obj->getNumfixo());
        $stmt->bindValue(7, $obj->getNumcel());
        $stmt->bindValue(8, $obj->getSalario());
        $stmt->bindValue(9, $obj->getDtadmissao());
        $stmt->bindValue(10, $obj->getEstado());
        $stmt->bindValue(11, $obj->getLogradouro());
        $stmt->bindValue(12, $obj->getNumero());
        $stmt->bindValue(13, $obj->getComplemento());
        $stmt->bindValue(14, $obj->getBairro());
        $stmt->bindValue(15, $obj->getMunicipio());
        $stmt->bindValue(16, $obj->getUf());
        $stmt->bindValue(17, $obj->getPais());
        $stmt->bindValue(18, $obj->getReferencia());
        $stmt->bindValue(19, $obj->getId());

        $stmt->execute();
        $stmt->closeCursor();
    }

}
