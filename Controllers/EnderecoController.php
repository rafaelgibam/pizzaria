<?php

namespace Controllers;

use DAO\EnderecoDAO;
use Models\Endereco;

class EnderecoController
{
    private $e;
    private $edao;

    public function __construct()
    {
        $this->e = new Endereco();
        $this->edao = new EnderecoDAO();
    }

    public function insert($logradouro, $numero, $complemento, $bairro, $municipio, $uf, $pais, $referencia, $cep)
    {
        $this->e = new Endereco();
        $this->edao = new EnderecoDAO();

        $this->e->setLogradouro($logradouro);
        $this->e->setNumero($numero);
        $this->e->setComplemento($complemento);
        $this->e->setBairro($bairro);
        $this->e->setMunicipio($municipio);
        $this->e->setUf($uf);
        $this->e->setPais($pais);
        $this->e->setReferencia($referencia);
        $this->e->setCep($cep);

        $this->edao->insert($this->e);
    }

    public function update($id ,$logradouro, $numero, $complemento, $bairro, $municipio, $uf, $pais, $referencia, $cep)
    {
        $this->e->setId($id);
        $this->e->setLogradouro($logradouro);
        $this->e->setNumero($numero);
        $this->e->setComplemento($complemento);
        $this->e->setBairro($bairro);
        $this->e->setMunicipio($municipio);
        $this->e->setUf($uf);
        $this->e->setPais($pais);
        $this->e->setReferencia($referencia);
        $this->e->setCep($cep);

        $this->edao->update($this->e);
    }

    public function findAll()
    {
        return $this->edao->findAll();
    }

    public function find($id){
        return $this->edao->find($id);
    }
}