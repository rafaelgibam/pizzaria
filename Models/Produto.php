<?php

namespace Models;

class Produto
{
    private $id;
    private $nome;
    private $cat;
    private $descricao;
    private $preco;
    private $altura;
    private $comprimento;
    private $largura;
    private $peso;
    private $estado;
    private $fatia;
    private $borda;
    private $cozinheiro;
    private $qtd;


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
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getCat()
    {
        return $this->cat;
    }

    /**
     * @param mixed $cat
     */
    public function setCat($cat)
    {
        $this->cat = $cat;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
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
    public function getFatia()
    {
        return $this->fatia;
    }

    /**
     * @param mixed $fatia
     */
    public function setFatia($fatia)
    {
        $this->fatia = $fatia;
    }

    /**
     * @return mixed
     */
    public function getBorda()
    {
        return $this->borda;
    }

    /**
     * @param mixed $borda
     */
    public function setBorda($borda)
    {
        $this->borda = $borda;
    }

    /**
     * @return mixed
     */
    public function getCozinheiro()
    {
        return $this->cozinheiro;
    }

    /**
     * @param mixed $cozinheiro
     */
    public function setCozinheiro($cozinheiro)
    {
        $this->cozinheiro = $cozinheiro;
    }
    /**
     * @return mixed
     */
    public function getQtd()
    {
        return $this->qtd;
    }

    /**
     * @param mixed qtd
     */
    public function setQtd($qtd)
    {
        $this->qtd = $qtd;
    }

}
