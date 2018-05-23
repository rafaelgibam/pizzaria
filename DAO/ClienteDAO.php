<?php


namespace DAO;


class ClienteDAO extends Model implements ICrud
{

    protected $table = "cliente";

    public function insert($obj)
    {
        //LOGRADOURO	NUMERO	COMPLEMENTO	BAIRRO	MUNICIPIO	UF	PAIS	REFERENCIA
        $stmt = DB::getCon()->prepare("INSERT INTO {$this->table} (`CPF`,`RG`, `NOME`, `SEXO`, `DATA_NASC`, `NUM_FIXO`, `NUM_CELULAR`, `ESTADO`, `LOGRADOURO`, 
                                                                            `NUMERO`, `COMPLEMENTO`, `BAIRRO`, `MUNICIPIO`, `UF`, `PAIS`, `REFERENCIA`) 
                                                 VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

        $stmt->bindValue(1, $obj->getCpf());
        $stmt->bindValue(2, $obj->getRg());
        $stmt->bindValue(3, $obj->getNome());
        $stmt->bindValue(4, $obj->getSexo());
        $stmt->bindValue(5, $obj->getDtnasc());
        $stmt->bindValue(6, $obj->getNumfixo());
        $stmt->bindValue(7, $obj->getNumcel());
        $stmt->bindValue(8, $obj->getEstado());
        $stmt->bindValue(9, $obj->getLogradouro());
        $stmt->bindValue(10, $obj->getNumero());
        $stmt->bindValue(11, $obj->getComplemento());
        $stmt->bindValue(12, $obj->getBairro());
        $stmt->bindValue(13, $obj->getMunicipio());
        $stmt->bindValue(14, $obj->getUf());
        $stmt->bindValue(15, $obj->getPais());
        $stmt->bindValue(16, $obj->getReferencia());

        $stmt->execute();
        $stmt->closeCursor();

    }

    public function update($obj)
    {
        $stmt = DB::getCon()->prepare("UPDATE {$this->table}
                                                 SET CPF = ?, RG = ?, NOME = ?, SEXO = ?, DATA_NASC = ?, NUM_FIXO = ?, 
                                                 NUM_CELULAR = ?, ESTADO = ?, LOGRADOURO = ?, NUMERO = ?, COMPLEMENTO = ?, BAIRRO = ?, MUNICIPIO = ?,
                                                 UF = ?, PAIS = ?, REFERENCIA = ?
                                                 WHERE ID = ?");

        $stmt->bindValue(1, $obj->getCpf());
        $stmt->bindValue(2, $obj->getRg());
        $stmt->bindValue(3, $obj->getNome());
        $stmt->bindValue(4, $obj->getSexo());
        $stmt->bindValue(5, $obj->getDtnasc());
        $stmt->bindValue(6, $obj->getNumfixo());
        $stmt->bindValue(7, $obj->getNumcel());
        $stmt->bindValue(8, $obj->getEstado());
        $stmt->bindValue(9, $obj->getLogradouro());
        $stmt->bindValue(10, $obj->getNumero());
        $stmt->bindValue(11, $obj->getComplemento());
        $stmt->bindValue(12, $obj->getBairro());
        $stmt->bindValue(13, $obj->getMunicipio());
        $stmt->bindValue(14, $obj->getUf());
        $stmt->bindValue(15, $obj->getPais());
        $stmt->bindValue(16, $obj->getReferencia());
        $stmt->bindValue(17, $obj->getId());

        $stmt->execute();
        $stmt->closeCursor();
    }
}