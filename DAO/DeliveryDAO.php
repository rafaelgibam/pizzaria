<?php

namespace DAO;


class DeliveryDAO extends Model implements ICrud
{
    protected $table = "delivery";

    public function insert($obj)
    {

        $stmt = DB::getCon()->prepare("INSERT INTO {$this->table} (`DATA_ENTREGA`,`PRECO`,`MOTOBOY_ID`,`PEDIDO_DELIVERY_ID`,
                                                `CLIENTE_ID`)
                                                 VALUES (?,?,?,?,?)");

        $stmt->bindValue(1, $obj->getDtentrega());
        $stmt->bindValue(2, $obj->getPreco());
        $stmt->bindValue(3, $obj->getMotoboy());
        $stmt->bindValue(4, $obj->getPedidoDelivery());
        $stmt->bindValue(5, $obj->getCliente());
        $stmt->execute();
        $stmt->closeCursor();

    }

    public function update($obj)
    {

        $stmt = DB::getCon()->prepare("UPDATE {$this->table}
                                                 SET DATA_ENTREGA = ?, PRECO = ?, MOTOBOY_ID = ?, 
                                                 PEDIDO_DELIVERY_ID = ?, CLIENTE_ID = ?
                                                 WHERE ID = ?");

        $stmt->bindValue(1, $obj->getDtentrega());
        $stmt->bindValue(2, $obj->getPreco());
        $stmt->bindValue(3, $obj->getMotoboy());
        $stmt->bindValue(4, $obj->getPedidoDelivery());
        $stmt->bindValue(5, $obj->getCliente());
        $stmt->bindValue(6, $obj->getId());

        $stmt->execute();
        $stmt->closeCursor();

    }
}