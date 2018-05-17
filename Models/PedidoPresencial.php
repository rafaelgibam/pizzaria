<?php


namespace Models;


class PedidoPresencial extends Pedido
{
    private $mesa;
    private $cliente;
    private $garcom;


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
     * @return Garcom
     */
    public function getGarcom()
    {
        return $this->garcom;
    }

    /**
     * @param Garcom $garcom
     */
    public function setGarcom(Garcom $garcom)
    {
        $this->garcom = $garcom;
    }

    /**
     * @return mixed
     */
    public function getMesa()
    {
        return $this->mesa;
    }

    /**
     * @param mixed $mesa
     */
    public function setMesa($mesa)
    {
        $this->mesa = $mesa;
    }

    /**
     * @return mixed
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * @param mixed $cliente
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }




}