<?php

namespace Models;

class Cliente extends Pessoa
{
    protected $id;
    protected $nome;
    protected $cpf;
    protected $sexo;
    protected $dtnasc;
    protected $numcel;
    protected $numfixo;
    protected $estado;
    protected $endereco;
    private $criadoem;

    /**
     * @return $idade
     */
    public function getIdade()
    {
        return parent::getIdade();
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
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param mixed $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * @return mixed
     */
    public function getDtnasc()
    {
        return $this->dtnasc;
    }

    /**
     * @param mixed $dtnasc
     */
    public function setDtnasc($dtnasc)
    {
        $this->dtnasc = $dtnasc;
    }

    /**
     * @return mixed
     */
    public function getNumcel()
    {
        return $this->numcel;
    }

    /**
     * @param mixed $numcel
     */
    public function setNumcel($numcel)
    {
        $this->numcel = $numcel;
    }

    /**
     * @return mixed
     */
    public function getNumfixo()
    {
        return $this->numfixo;
    }

    /**
     * @param mixed $numfixo
     */
    public function setNumfixo($numfixo)
    {
        $this->numfixo = $numfixo;
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
     * @return mixed
     */
    public function getCriadoem()
    {
        return $this->criadoem;
    }

    /**
     * @param mixed $criadoem
     */
    public function setCriadoem($criadoem)
    {
        $this->criadoem = $criadoem;
    }




}