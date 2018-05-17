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
    public $valorpedido;
    public $obs;
}