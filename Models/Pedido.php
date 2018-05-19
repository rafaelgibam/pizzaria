<?php

namespace Models;

class Pedido
{
    public $id;
    public $numero;
    public $dtabertura;
    public $dtfechamento;
    public $itempedido; // objeto de itemPedido
    public $estado;
    public $total;
    public $obs;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getDtabertura()
    {
        return $this->dtabertura;
    }

    /**
     * @param mixed $dtabertura
     */
    public function setDtabertura($dtabertura)
    {
        $this->dtabertura = $dtabertura;
    }

    /**
     * @return mixed
     */
    public function getDtfechamento()
    {
        return $this->dtfechamento;
    }

    /**
     * @param mixed $dtfechamento
     */
    public function setDtfechamento($dtfechamento)
    {
        $this->dtfechamento = $dtfechamento;
    }

    /**
     * @return mixed
     */
    public function getItempedido()
    {
        return $this->itempedido;
    }

    /**
     * @param mixed $itempedido
     */
    public function setItempedido($itempedido)
    {
        $this->itempedido = $itempedido;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $valorpedido
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @return mixed
     */
    public function getObs()
    {
        return $this->obs;
    }

    /**
     * @param mixed $obs
     */
    public function setObs($obs)
    {
        $this->obs = $obs;
    }


}