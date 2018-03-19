<?php

namespace Models;

class ItemDoPedido
{
    private $produto;
    private $pedido;

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