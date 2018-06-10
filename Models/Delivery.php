<?php


namespace Models;


abstract class Delivery extends Pedido
{

    protected $dtentrega;
    protected $precofrete;

    abstract protected function calculaFrete( $cep );

}