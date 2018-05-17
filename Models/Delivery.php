<?php
/**
 * Created by PhpStorm.
 * User: rafaelgibam
 * Date: 17/05/2018
 * Time: 11:57
 */

namespace Models;


class Delivery
{
    private $id;
    private $dtentraga;
    private $precofrete;
    private $motoboy; // Objeto de Motoboy
    private $cliente; // Objeto de Cliente
    private $pedidodelivery; // Objeto de PedidoDelivery

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
    public function getDtentraga()
    {
        return $this->dtentraga;
    }

    /**
     * @param mixed $dtentraga
     */
    public function setDtentraga($dtentraga)
    {
        $this->dtentraga = $dtentraga;
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
    public function getMotoboy()
    {
        return $this->motoboy;
    }

    /**
     * @param mixed $motoboy
     */
    public function setMotoboy($motoboy)
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
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }

    /**
     * @return mixed
     */
    public function getPedidodelivery()
    {
        return $this->pedidodelivery;
    }

    /**
     * @param mixed $pedidodelivery
     */
    public function setPedidodelivery($pedidodelivery)
    {
        $this->pedidodelivery = $pedidodelivery;
    } // Objeto de PedidoDelivery

}