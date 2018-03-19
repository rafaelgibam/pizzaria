<?php

namespace Models;

class Produto
{
    private $id;
    private $nomeproduto;
    private $preco;
    private $marca;
    private $profundidade;
    private $comprimento;
    private $altura;
    private $largura;
    private $sabor;
    private $status;

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
    public function getNomeproduto()
    {
        return $this->nomeproduto;
    }

    /**
     * @param mixed $nomeproduto
     */
    public function setNomeproduto($nomeproduto)
    {
        $this->nomeproduto = $nomeproduto;
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
     * @return mixed
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @param mixed $marca
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    /**
     * @return mixed
     */
    public function getProfundidade()
    {
        return $this->profundidade;
    }

    /**
     * @param mixed $profundidade
     */
    public function setProfundidade($profundidade)
    {
        $this->profundidade = $profundidade;
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
    public function getLargura()
    {
        return $this->largura;
    }

    /**
     * @param mixed $largura
     */
    public function setLargura($largura)
    {
        $this->largura = $largura;
    }

    /**
     * @return mixed
     */
    public function getSabor()
    {
        return $this->sabor;
    }

    /**
     * @param mixed $sabor
     */
    public function setSabor($sabor)
    {
        $this->sabor = $sabor;
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

    



}