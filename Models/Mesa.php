<?php

namespace Models;

class Mesa
{
    private $id;
    private $nummesa;
    private $nomemesa;
    private $cormesa;
    private $peso;
    private $altura;
    private $comprimento;
    private $capacidade;
    private $tipomesa;
    private $status;
    private $garcom;
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
    public function getNummesa()
    {
        return $this->nummesa;
    }

    /**
     * @param mixed $nummesa
     */
    public function setNummesa($nummesa)
    {
        $this->nummesa = $nummesa;
    }

    /**
     * @return mixed
     */
    public function getNomemesa()
    {
        return $this->nomemesa;
    }

    /**
     * @param mixed $nomemesa
     */
    public function setNomemesa($nomemesa)
    {
        $this->nomemesa = $nomemesa;
    }

    /**
     * @return mixed
     */
    public function getCormesa()
    {
        return $this->cormesa;
    }

    /**
     * @param mixed $cormesa
     */
    public function setCormesa($cormesa)
    {
        $this->cormesa = $cormesa;
    }

    /**
     * @return mixed
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * @param mixed $peso
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    /**
     * @return mixed
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * @param mixed $altura
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    /**
     * @return mixed
     */
    public function getComprimento()
    {
        return $this->comprimento;
    }

    /**
     * @param mixed $comprimento
     */
    public function setComprimento($comprimento)
    {
        $this->comprimento = $comprimento;
    }

    /**
     * @return mixed
     */
    public function getCapacidade()
    {
        return $this->capacidade;
    }

    /**
     * @param mixed $capacidade
     */
    public function setCapacidade($capacidade)
    {
        $this->capacidade = $capacidade;
    }

    /**
     * @return mixed
     */
    public function getTipomesa()
    {
        return $this->tipomesa;
    }

    /**
     * @param mixed $tipomesa
     */
    public function setTipomesa($tipomesa)
    {
        $this->tipomesa = $tipomesa;
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
     * @return Pedido
     */
    public function getPedido()
    {
        return $this->pedido;
    }

    /**
     * @param Pedido $pedido
     */
    public function setPedido(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }


}