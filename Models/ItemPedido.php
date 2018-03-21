<?php

namespace Models;

class ItemPedido
{
    private $produto;
    private $qtd;
    private $obs;
    private $pedido;

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

    /**
     * @return Produto
     */
    public function getProduto()
    {
        return $this->produto;
    }

    /**
     * @param Produto $produto
     */
    public function setProduto(Produto $produto)
    {
        $this->produto = $produto;
    }

    /**
     * @return mixed
     */
    public function getQtd()
    {
        return $this->qtd;
    }

    /**
     * @param mixed $qtd
     */
    public function setQtd($qtd)
    {
        $this->qtd = $qtd;
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