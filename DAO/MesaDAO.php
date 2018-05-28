<?php


namespace DAO;


class MesaDAO extends Model implements ICrud
{
    protected $table = "MESA";

    public function insert($obj)
    {
        $stmt = DB::getCon()->prepare("INSERT INTO {$this->table} (`NOME`,`NUMERO`,`COR`,`QTD_LUGAR`,
                                                `PESO`,`ALTURA`,`COMPRIMENTO`,`LARGURA`,`ESTADO`)
                                                 VALUES (?,?,?,?,?,?,?,?,?)");

        $stmt->bindValue(1, $obj->getNome());
        $stmt->bindValue(2, $obj->getNumero());
        $stmt->bindValue(3, $obj->getCor());
        $stmt->bindValue(4, $obj->getCapacidade());
        $stmt->bindValue(5, $obj->getPeso());
        $stmt->bindValue(6, $obj->getAltura());
        $stmt->bindValue(7, $obj->getComprimento());
        $stmt->bindValue(8, $obj->getLargura());
        $stmt->bindValue(9, $obj->getEstado());

        $stmt->execute();
        $stmt->closeCursor();
    }

    public function update($obj)
    {
        $stmt = DB::getCon()->prepare("UPDATE {$this->table}
                                                 SET NOME = ?, NUMERO = ?, COR = ?, QTD_LUGAR = ?,
                                                 PESO = ?, ALTURA = ?, COMPRIMENTO = ?, LARGURA = ?, ESTADO = ?
                                                 WHERE ID = ?");

        $stmt->bindValue(1, $obj->getNome());
        $stmt->bindValue(2, $obj->getNumero());
        $stmt->bindValue(3, $obj->getCor());
        $stmt->bindValue(4, $obj->getCapacidade());
        $stmt->bindValue(5, $obj->getPeso());
        $stmt->bindValue(6, $obj->getAltura());
        $stmt->bindValue(7, $obj->getComprimento());
        $stmt->bindValue(8, $obj->getLargura());
        $stmt->bindValue(9, $obj->getEstado());

        $stmt->execute();
        $stmt->closeCursor();
    }
}
