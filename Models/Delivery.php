<?php

namespace Models;

class Delivery
{
    private $id;
    private $precofrete;
    private $tempoentrega;
    private $pedido;

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
    public function getPrecofrete()
    {
        return $this->precofrete;
    }

    /**
     * @param mixed $precofrete
     */
    public function setPrecofrete($precofrete)
    {
        $this->precofrete = $precofrete;
    }

    /**
     * @return mixed
     */
    public function getTempoentrega()
    {
        return $this->tempoentrega;
    }

    /**
     * @param mixed $tempoentrega
     */
    public function setTempoentrega($tempoentrega)
    {
        $this->tempoentrega = $tempoentrega;
    }

    /**
     * @return mixed
     */
    public function getPedido()
    {
        return $this->pedido;
    }

    /**
     * @param mixed $pedido
     */
    public function setPedido(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }


}