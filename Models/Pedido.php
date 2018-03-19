<?php

namespace Models;

class Pedido
{
    private $id;
    private $numpedido;
    private $datapedido;
    private $dataentrega;
    private $datafechamento;
    private $status;
    private $obs;
    private $valorpedido;
    private $cozinheiro;

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
    public function getNumpedido()
    {
        return $this->numpedido;
    }

    /**
     * @param mixed $numpedido
     */
    public function setNumpedido($numpedido)
    {
        $this->numpedido = $numpedido;
    }

    /**
     * @return mixed
     */
    public function getDatapedido()
    {
        return $this->datapedido;
    }

    /**
     * @param mixed $datapedido
     */
    public function setDatapedido($datapedido)
    {
        $this->datapedido = $datapedido;
    }

    /**
     * @return mixed
     */
    public function getDataentrega()
    {
        return $this->dataentrega;
    }

    /**
     * @param mixed $dataentrega
     */
    public function setDataentrega($dataentrega)
    {
        $this->dataentrega = $dataentrega;
    }

    /**
     * @return mixed
     */
    public function getDatafechamento()
    {
        return $this->datafechamento;
    }

    /**
     * @param mixed $datafechamento
     */
    public function setDatafechamento($datafechamento)
    {
        $this->datafechamento = $datafechamento;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
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

    /**
     * @return mixed
     */
    public function getValorpedido()
    {
        return $this->valorpedido;
    }

    /**
     * @param mixed $valorpedido
     */
    public function setValorpedido($valorpedido)
    {
        $this->valorpedido = $valorpedido;
    }

    /**
     * @return Cozinheiro
     */
    public function getCozinheiro()
    {
        return $this->cozinheiro;
    }

    /**
     * @param Cozinheiro $cozinheiro
     */
    public function setCozinheiro(Cozinheiro $cozinheiro)
    {
        $this->cozinheiro = $cozinheiro;
    }


}