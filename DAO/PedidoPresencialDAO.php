<?php


namespace DAO;


use Models\Pedido;

class PedidoPresencialDAO extends Model implements ICrud
{
    protected $table = "PEDIDO_PRESENCIAL";

    public function insert($obj)
    {
        // 	ID	NUMERO	DATA_ABERTURA	DATA_FECHAMENTO	ESTADO	TOTAL	OBSERVACOES	GARCOM_ID	MESA_ID	ITEM_PEDIDO_ID	CLIENTE_ID

        $stmt = DB::getCon()->prepare("INSERT INTO {$this->table} (`NUMERO`,`DATA_ABERTURA`,`ESTADO`,
                                                `TOTAL`,`OBSERVACOES`,`GARCOM_ID`, `MESA_ID`, `PRODUTO_ID`, 
                                                `CLIENTE_ID`, `QTD_PRODUTO`)
                                                 VALUES (?,?,?,?,?,?,?,?,?,?)");

        $stmt->bindValue(1, $obj->getNumero());
        $stmt->bindValue(2, $obj->getDtabertura());
        $stmt->bindValue(3, $obj->getEstado());
        $stmt->bindValue(4, $obj->getTotal());
        $stmt->bindValue(5, $obj->getObs());
        $stmt->bindValue(6, $obj->getGarcom()->getId());
        $stmt->bindValue(7, $obj->getMesa()->getId());
        $stmt->bindValue(8, $obj->getProduto()->getId());
        $stmt->bindValue(9, $obj->getCliente()->getId());
        $stmt->bindValue(10, $obj->getQtdprod());

        $stmt->execute();
        $stmt->closeCursor();
    }

    public function update($obj)
    {

        $stmt = DB::getCon()->prepare("UPDATE {$this->table}
                                                 SET NUMERO = ?, DATA_ABERTURA = ?, ESTADO = ?, TOTAL = ?,
                                                 OBSERVACOES = ?, GARCOM_ID = ?, MESA_ID = ?, PRODUTO_ID = ?, 
                                                 CLIENTE_ID = ?
                                                 WHERE ID = ?");

        $stmt->bindValue(1, $obj->getNumero());
        $stmt->bindValue(2, $obj->getDtabertura());
        $stmt->bindValue(3, $obj->getEstado());
        $stmt->bindValue(4, $obj->getTotal());
        $stmt->bindValue(5, $obj->getObs());
        $stmt->bindValue(6, $obj->getGarcom()->getId());
        $stmt->bindValue(7, $obj->getMesa()->getId());
        $stmt->bindValue(8, $obj->getProduto()->getId());
        $stmt->bindValue(9, $obj->getCliente()->getId());
        $stmt->bindValue(10, $obj->getId());


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
