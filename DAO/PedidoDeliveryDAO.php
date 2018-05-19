<?php


namespace DAO;


class PedidoDeliveryDAO extends Model implements ICrud
{
    protected $table = "pedido_delivery";

    public function insert($obj)
    {

        $stmt = DB::getCon()->prepare("INSERT INTO {$this->table} (`NUMERO`,`DATA_ABERTURA`,`DATA_FECHAMENTO`,`ESTADO`,
                                                `TOTAL`,`OBSERVACOES`,`ITEM_PEDIDO_ID`)
                                                 VALUES (?,?,?,?,?,?,?)");

        $stmt->bindValue(1, $obj->getNumero());
        $stmt->bindValue(2, $obj->getDtabertura());
        $stmt->bindValue(3, $obj->getDtfechamento());
        $stmt->bindValue(4, $obj->getEstado());
        $stmt->bindValue(5, $obj->getTotal());
        $stmt->bindValue(6, $obj->getObs());
        $stmt->bindValue(7, $obj->getItempedido());

        $stmt->execute();
        $stmt->closeCursor();
    }

    public function update($obj)
    {

        $stmt = DB::getCon()->prepare("UPDATE {$this->table}
                                                 SET NOME = ?, NUMERO = ?, DATA_ABERTURA = ?, DATA_FECHAMENTO = ?, ESTADO = ?, TOTAL = ?, 
                                                 OBSERVACOES = ?, ITEM_PEDIDO_ID = ?
                                                 WHERE ID = ?");

        $stmt->bindValue(1, $obj->getNumero());
        $stmt->bindValue(2, $obj->getDtabertura());
        $stmt->bindValue(3, $obj->getDtfechamento());
        $stmt->bindValue(4, $obj->getEstado());
        $stmt->bindValue(5, $obj->getTotal());
        $stmt->bindValue(6, $obj->getObs());
        $stmt->bindValue(7, $obj->getItempedido());
        $stmt->bindValue(8, $obj->getId());

        $stmt->execute();
        $stmt->closeCursor();

    }
}