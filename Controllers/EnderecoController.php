<?php

namespace Controllers;

use DAO\EnderecoDAO;
use Models\Endereco;

class EnderecoController
{
    public function insert($logradouro, $numero, $complemento, $bairro, $municipio, $uf, $pais, $referencia, $cep){
        $e = new Endereco();
        $edao = new EnderecoDAO();

        $e->setLogradouro($logradouro);
        $e->setNumero($numero);
        $e->setComplemento($complemento);
        $e->setBairro($bairro);
        $e->setMunicipio($municipio);
        $e->setUf($uf);
        $e->setPais($pais);
        $e->setReferencia($referencia);
        $e->setCep($cep);

        $edao->insert($e);
    }

    public function update($id ,$logradouro, $numero, $complemento, $bairro, $municipio, $uf, $pais, $referencia, $cep){
        $e = new Endereco();
        $edao = new EnderecoDAO();
        $e->setId($id);
        $e->setLogradouro($logradouro);
        $e->setNumero($numero);
        $e->setComplemento($complemento);
        $e->setBairro($bairro);
        $e->setMunicipio($municipio);
        $e->setUf($uf);
        $e->setPais($pais);
        $e->setReferencia($referencia);
        $e->setCep($cep);

        $edao->update($e);
    }
}