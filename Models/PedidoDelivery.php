<?php
/**
 * Created by PhpStorm.
 * User: rafaelgibam
 * Date: 21/03/2018
 * Time: 11:27
 */

namespace Models;


class PedidoNormal extends Pedido
{
    protected $id;
    protected $numero;
    protected $dtabertura;
    protected $dtfechamento;
    protected $itempedido;
    protected $estado;
    protected $valorpedido;
    protected $obs;
    private $dtentrega;
    private $preco;
    private $endereco; // return a um objeto de Endereco
    private $motoboy; // return a um objeto de motoboy


    public function calculaFrete(Endereco $endereco){
        // Calcula frete com informações do endereço;
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
     * @return mixed
     */
    public function getDtentrega()
    {
        return $this->dtentrega;
    }

    /**
     * @param mixed $dtentrega
     */
    public function setDtentrega($dtentrega)
    {
        $this->dtentrega = $dtentrega;
    }

    /**
     * @return mixed
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * @param mixed $preco
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    /**
     * @return Endereco
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param Endereco $endereco
     */
    public function setEndereco(Endereco $endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @return MotoBoy
     */
    public function getMotoboy()
    {
        return $this->motoboy;
    }

    /**
     * @param MotoBoy $motoboy
     */
    public function setMotoboy(MotoBoy $motoboy)
    {
        $this->motoboy = $motoboy;
    }




}