<?php

namespace DAO;

class ItemPedidoDAO extends Model implements ICrud
{
    protected $table = "item_pedido";

    public function insert($obj)
    {
        $stmt = DB::getCon()->prepare("INSERT INTO {$this->table} (`QTD`,`PRODUTO_ID`) VALUES (?,?)");

        $stmt->bindValue(1, $obj->getQtd());
        $stmt->bindValue(2, $obj->getProduto());

        $stmt->execute();
        $stmt->closeCursor();
    }

    public function update($obj)
    {
        $stmt = DB::getCon()->prepare("UPDATE {$this->table} SET QTD = ?, PRODUTO_ID = ? WHERE ID = ?");
        $stmt->bindValue(1, $obj->getQtd());
        $stmt->bindValue(2, $obj->getProduto());
        $stmt->bindValue(3, $obj->getId());

        $stmt->execute();
        $stmt->closeCursor();
    }
}