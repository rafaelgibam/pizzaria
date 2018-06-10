<?php

namespace Models;

class PedidoDelivery extends Delivery
{
    private $motoboy;
    private $cliente;
    private $produto;


    protected function calculaFrete($cep)
    {
        // TODO: Implement calculaFrete() method.
    }


    /**
     * @return mixed
     */
    public function getDtentrega()
    {
        return $this->dtentrega;
    }

    /**
     * @param mixed $dtentraga
     */
    public function setDtentrega($dtentrega): void
    {
        $this->dtentrega = $dtentrega;
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
    public function setPrecofrete($precofrete): void
    {
        $this->precofrete = $precofrete;
    }

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
    public function setId($id): void
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
    public function setNumero($numero): void
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
    public function setDtabertura($dtabertura): void
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
    public function setDtfechamento($dtfechamento): void
    {
        $this->dtfechamento = $dtfechamento;
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
    public function setEstado($estado): void
    {
        $this->estado = $estado;
    }

    /**
     * @return mixed
     */
    public function getQtdprod()
    {
        return $this->qtdprod;
    }

    /**
     * @param mixed $qtdprod
     */
    public function setQtdprod($qtdprod): void
    {
        $this->qtdprod = $qtdprod;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total): void
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
    public function setObs($obs): void
    {
        $this->obs = $obs;
    }

    /**
     * @return mixed
     */
    public function getMotoboy()
    {
        return $this->motoboy;
    }

    /**
     * @param mixed $motoboy
     */
    public function setMotoboy($motoboy): void
    {
        $this->motoboy = $motoboy;
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
    public function setCliente($cliente): void
    {
        $this->cliente = $cliente;
    }

    /**
     * @return mixed
     */
    public function getProduto()
    {
        return $this->produto;
    }

    /**
     * @param mixed $produto
     */
    public function setProduto($produto): void
    {
        $this->produto = $produto;
    }


}