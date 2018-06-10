<?php

namespace Models;

abstract class Pedido
{
    protected $id;
    protected $numero;
    protected $dtabertura;
    protected $dtfechamento;
    protected $estado;
    protected $qtdprod;
    protected $total;
    protected $obs;
}