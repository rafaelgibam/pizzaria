<?php

namespace DAO;

class ProdutoDAO extends Model implements ICrud
{
    protected $table = "PRODUTO";

    public function insert($obj)
    {

        $stmt = DB::getCon()->prepare("INSERT INTO {$this->table} (`NOME`,`DESCRICAO`, `PRECO`, `ALTURA`, `COMPRIMENTO`, `LARGURA`, `PESO`, `ESTADO`, `FATIA`, `BORDA`, `COZINHEIRO_ID`, `QTD`)
                                                 VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");

        $stmt->bindValue(1, $obj->getNome());
        $stmt->bindValue(2, $obj->getDescricao());
        $stmt->bindValue(3, $obj->getPreco());
        $stmt->bindValue(4, $obj->getAltura());
        $stmt->bindValue(5, $obj->getComprimento());
        $stmt->bindValue(6, $obj->getLargura());
        $stmt->bindValue(7, $obj->getPeso());
        $stmt->bindValue(8, $obj->getEstado());
        $stmt->bindValue(9, $obj->getFatia());
        $stmt->bindValue(10, $obj->getBorda());
        $stmt->bindValue(11, $obj->getCozinheiro()->getId());
        $stmt->bindValue(12, $obj->getQtd());

        $stmt->execute();
        $stmt->closeCursor();
    }

    public function update($obj)
    {
        $stmt = DB::getCon()->prepare("UPDATE {$this->table}
                                                 SET NOME = ?, DESCRICAO = ?, PRECO = ?, ALTURA = ?, COMPRIMENTO = ?, LARGURA = ?, PESO = ?,
                                                 ESTADO = ?, FATIA = ?, BORDA = ?, `COZINHEIRO_ID` = ?, `QTD` = ?
                                                 WHERE ID = ?");

        $stmt->bindValue(1, $obj->getNome());
        $stmt->bindValue(2, $obj->geDescricao());
        $stmt->bindValue(3, $obj->getPreco());
        $stmt->bindValue(4, $obj->getAltura());
        $stmt->bindValue(5, $obj->getComprimento());
        $stmt->bindValue(6, $obj->getLargura());
        $stmt->bindValue(7, $obj->getPeso());
        $stmt->bindValue(8, $obj->getEstado());
        $stmt->bindValue(9, $obj->getFatia());
        $stmt->bindValue(10, $obj->getBorda());
        $stmt->bindValue(11, $obj->getCozinheiro()->getId());
        $stmt->bindValue(12, $obj->getQtd());
        $stmt->bindValue(13, $obj->getId());

        $stmt->execute();
        $stmt->closeCursor();
    }
}
