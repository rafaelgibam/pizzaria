<?php

namespace Controllers;

use DAO\ClienteDAO;
use DAO\EnderecoDAO;
use Models\Cliente;
use Models\Endereco;

class EnderecoController
{
    private $e;
    private $edao;
    private $c;

    public function __construct()
    {
        $this->e = new Endereco();
        $this->edao = new EnderecoDAO();
        $this->c = new Cliente();
    }

    public function insert($logradouro, $numero, $complemento, $bairro, $municipio, $uf, $pais, $referencia, $cep, $clienteid)
    {

        $this->e->setLogradouro($logradouro);
        $this->e->setNumero($numero);
        $this->e->setComplemento($complemento);
        $this->e->setBairro($bairro);
        $this->e->setMunicipio($municipio);
        $this->e->setUf($uf);
        $this->e->setPais($pais);
        $this->e->setReferencia($referencia);
        $this->e->setCep($cep);

        $this->c->setId($clienteid);
        $this->e->setCliente($this->c);

        if($this->e->getLogradouro() != null && $this->e->getNumero() != null && $this->e->getMunicipio() != null && $this->c->getId() != null){
            $this->edao->insert($this->e);
            return header("location: end_form.php?msg=salvo");
        }else{
            return header("location: end_form.php?msg=erro");
        }
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