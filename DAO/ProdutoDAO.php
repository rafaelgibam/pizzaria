<?php
/**
 * Created by PhpStorm.
 * User: rafaelgibam
 * Date: 17/05/2018
 * Time: 17:23
 */

namespace DAO;


class ProdutoDAO extends Model implements ICrud
{
    protected $table = "produto";

    public function insert($obj)
    {

        $stmt = DB::getCon()->prepare("INSERT INTO {$this->table} (`NOME`,`DESCRICAO`, `PRECO`, `ALTURA`, `COMPRIMENTO`, `LARGURA`, `PESO`, `ESTADO`, `FATIA`, `BORDA`, `COZINHEIRO_ID`) 
                                                 VALUES (?,?,?,?,?,?,?,?,?,?,?)");

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

        $stmt->execute();
        $stmt->closeCursor();
    }

    public function update($obj)
    {
        $stmt = DB::getCon()->prepare("UPDATE {$this->table}
                                                 SET NOME = ?, DESCRICAO = ?, PRECO = ?, ALTURA = ?, COMPRIMENTO = ?, LARGURA = ?, PESO = ?, ESTADO = ?, FATIA = ?, BORDA = ?, `COZINHEIRO_ID` = ?
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
        $stmt->bindValue(12, $obj->getId());

        $stmt->execute();
        $stmt->closeCursor();
    }
}