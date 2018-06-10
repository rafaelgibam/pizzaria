<?php


namespace DAO;


class PedidoDeliveryDAO extends Model implements ICrud
{
    protected $table = "PEDIDO_DELIVERY";

    public function insert($obj)
    {

        $stmt = DB::getCon()->prepare("INSERT INTO {$this->table} (`NUMERO`,`DATA_ABERTURA`,`DATA_FECHAMENTO`,`ESTADO`,
                                                `TOTAL`,`OBSERVACOES`,`PRODUTO_ID`, `MOTOBOY_ID`, `CLIENTE_ID`, `PRECO_FRETE`,
                                                 `DATA_ENTREGA`, `QTD_PRODUTO`)
                                                 VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");

        $stmt->bindValue(1, $obj->getNumero());
        $stmt->bindValue(2, $obj->getDtabertura());
        $stmt->bindValue(3, $obj->getDtfechamento());
        $stmt->bindValue(4, $obj->getEstado());
        $stmt->bindValue(5, $obj->getTotal());
        $stmt->bindValue(6, $obj->getObs());
        $stmt->bindValue(7, $obj->getProduto()->getId());
        $stmt->bindValue(8, $obj->getMotoboy()->getId());
        $stmt->bindValue(9, $obj->getCliente()->getId());
        $stmt->bindValue(10, $obj->getPrecofrete());
        $stmt->bindValue(11, $obj->getDtentrega());
        $stmt->bindValue(12, $obj->getQtdprod());

        $stmt->execute();
        $stmt->closeCursor();
    }

    public function update($obj)
    {

        $stmt = DB::getCon()->prepare("UPDATE {$this->table}
                                                 SET NUMERO = ?, DATA_ABERTURA = ?, DATA_FECHAMENTO = ?, ESTADO = ?, TOTAL = ?,
                                                 OBSERVACOES = ?, PRODUTO_ID = ?, MOTOBOY_ID = ?, CLIENTE_ID = ?, PRECO_FRETE = ?,
                                                 DATA_ENTREGA = ?, QTD_PRODUTO = ?
                                                 WHERE ID = ?");

        $stmt->bindValue(1, $obj->getNumero());
        $stmt->bindValue(2, $obj->getDtabertura());
        $stmt->bindValue(3, $obj->getDtfechamento());
        $stmt->bindValue(4, $obj->getEstado());
        $stmt->bindValue(5, $obj->getTotal());
        $stmt->bindValue(6, $obj->getObs());
        $stmt->bindValue(7, $obj->getProduto()->getId());
        $stmt->bindValue(8, $obj->getMotoboy()->getId());
        $stmt->bindValue(9, $obj->getCliente()->getId());
        $stmt->bindValue(10, $obj->getPrecofrete());
        $stmt->bindValue(11, $obj->getDtentrega());
        $stmt->bindValue(12, $obj->getQtdprod());
        $stmt->bindValue(13, $obj->getId());

        $stmt->execute();
        $stmt->closeCursor();

    }

    public function fecharPedido($obj){
        $stmt = DB::getCon()->prepare("UPDATE {$this->table}
                                                SET DATA_FECHAMENTO = ?, ESTADO = ?
                                                WHERE ID = ?");

        $stmt->bindValue(1,$obj->getDtfechamento());
        $stmt->bindValue(2,$obj->getEstado());
        $stmt->bindValue(3,$obj->getId());

        $stmt->execute();
        $stmt->closeCursor();
    }
}
