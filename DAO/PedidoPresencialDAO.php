<?php


namespace DAO;


use Models\Pedido;

class PedidoPresencialDAO extends Model implements ICrud
{
    protected $table = "PEDIDO_PRESENCIAL";

    public function insert($obj)
    {
        // 	ID	NUMERO	DATA_ABERTURA	DATA_FECHAMENTO	ESTADO	TOTAL	OBSERVACOES	GARCOM_ID	MESA_ID	ITEM_PEDIDO_ID	CLIENTE_ID

        $stmt = DB::getCon()->prepare("INSERT INTO {$this->table} (`NUMERO`,`DATA_ABERTURA`,`DATA_FECHAMENTO`,`ESTADO`,
                                                `TOTAL`,`OBSERVACOES`,`GARCOM_ID`, ,`MESA_ID` ,`ITEM_PEDIDO_ID` ,`CLIENTE_ID` )
                                                 VALUES (?,?,?,?,?,?,?,?,?,?)");

        $stmt->bindValue(1, $obj->getNumero());
        $stmt->bindValue(2, $obj->getDtabertura());
        $stmt->bindValue(3, $obj->getDtfechamento());
        $stmt->bindValue(4, $obj->getEstado());
        $stmt->bindValue(5, $obj->getTotal());
        $stmt->bindValue(6, $obj->getObs());
        $stmt->bindValue(7, $obj->getGarcom());
        $stmt->bindValue(8, $obj->getMesa());
        $stmt->bindValue(9, $obj->getItempedido());
        $stmt->bindValue(10, $obj->getCliente());

        $stmt->execute();
        $stmt->closeCursor();
    }

    public function update($obj)
    {

        $stmt = DB::getCon()->prepare("UPDATE {$this->table}
                                                 SET NUMERO = ?, DATA_ABERTURA = ?, DATA_FECHAMENTO = ?, ESTADO = ?, TOTAL = ?,
                                                 OBSERVACOES = ?, GARCOM_ID = ?, MESA_ID = ?, ITEM_PEDIDO_ID = ?, CLIENTE_ID = ?
                                                 WHERE ID = ?");

        $stmt->bindValue(1, $obj->getNumero());
        $stmt->bindValue(2, $obj->getDtabertura());
        $stmt->bindValue(3, $obj->getDtfechamento());
        $stmt->bindValue(4, $obj->getEstado());
        $stmt->bindValue(5, $obj->getTotal());
        $stmt->bindValue(6, $obj->getObs());
        $stmt->bindValue(7, $obj->getGarcom());
        $stmt->bindValue(8, $obj->getMesa());
        $stmt->bindValue(9, $obj->getItempedido());
        $stmt->bindValue(10, $obj->getCliente());
        $stmt->bindValue(11, $obj->getId());


        $stmt->execute();
        $stmt->closeCursor();

    }
}
