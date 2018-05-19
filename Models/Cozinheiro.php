<?php

namespace Models;

class Cozinheiro extends PessoaJuridica
{

    private $produto; // Objeto de produto

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
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param mixed $cnpj
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    /**
     * @return mixed
     */
    public function getRazaosocial()
    {
        return $this->razaosocial;
    }

    /**
     * @param mixed $razaosocial
     */
    public function setRazaosocial($razaosocial)
    {
        $this->razaosocial = $razaosocial;
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
    public function getProduto()
    {
        return $this->produto;
    }

    /**
     * @param mixed $produto
     */
    public function setProduto($produto)
    {
        $this->produto = $produto;
    }




}