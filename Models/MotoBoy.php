<?php

namespace Models;

class MotoBoy extends Funcionario
{
    protected $id;
    protected $cpf;
    protected $nome;
    protected $sexo;
    protected $dtnasc;
    protected $numcel;
    protected $numfixo;
    protected $estado;
    protected $endereco;
    protected $dtadmissao;
    protected $salario;
    protected $ctps;
    protected $pis;
    private $placa;



    
    public function getIdade()
    {
        return parent::getIdade();
    }

    /**
     * @return mixed
     */
    public function getPlaca()
    {
        return $this->placa;
    }

    /**
     * @param mixed $placa
     */
    public function setPlaca($placa)
    {
        $this->placa = $placa;
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
     * @return mixed
     */
    public function getDtadmissao()
    {
        return $this->dtadmissao;
    }

    /**
     * @param mixed $dtadmissao
     */
    public function setDtadmissao($dtadmissao)
    {
        $this->dtadmissao = $dtadmissao;
    }

    /**
     * @return mixed
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * @param mixed $salario
     */
    public function setSalario($salario)
    {
        $this->salario = $salario;
    }

    /**
     * @return mixed
     */
    public function getCtps()
    {
        return $this->ctps;
    }

    /**
     * @param mixed $ctps
     */
    public function setCtps($ctps)
    {
        $this->ctps = $ctps;
    }

    /**
     * @return mixed
     */
    public function getPis()
    {
        return $this->pis;
    }

    /**
     * @param mixed $pis
     */
    public function setPis($pis)
    {
        $this->pis = $pis;
    }



}