<?php
/**
 * Created by PhpStorm.
 * User: rafaelgibam
 * Date: 21/03/2018
 * Time: 11:40
 */

namespace Models;


class Bebida extends Produto
{
    protected $id;
    protected $nome;
    protected $cat;
    protected $descricao;
    protected $preco;
    protected $altura;
    protected $comprimento;
    protected $largura;
    protected $peso;
    protected $estado;
    private $ml;
    private $tipo;
    private $tamanho;

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
    public function getMl()
    {
        return $this->ml;
    }

    /**
     * @param mixed $ml
     */
    public function setMl($ml)
    {
        $this->ml = $ml;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getTamanho()
    {
        return $this->tamanho;
    }

    /**
     * @param mixed $tamanho
     */
    public function setTamanho($tamanho)
    {
        $this->tamanho = $tamanho;
    }



    
}