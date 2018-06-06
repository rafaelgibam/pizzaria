<?php

namespace Controllers;

use DAO\ClienteDAO;
use Models\Cliente;
use Models\Endereco;

class ClienteController
{
    private $c;
    private $cdao;

    public function __construct()
    {
        $this->c = new Cliente();
        $this->cdao = new ClienteDAO();
    }

    public function insert($cpf, $rg, $nome, $sexo, $datanasc, $numfixo, $numcelular, $estado, $logradouro, $numero, $complemento, $bairro, $municipio, $uf, $pais, $referencia,$cep){

        $this->c->setCpf($cpf);
        $this->c->setRg($rg);
        $this->c->setNome($nome);
        $this->c->setSexo($sexo);
        $this->c->setDtnasc($datanasc);
        $this->c->setNumfixo($numfixo);
        $this->c->setNumcel($numcelular);
        $this->c->setEstado($estado);
        $this->c->setLogradouro($logradouro);
        $this->c->setNumero($numero);
        $this->c->setComplemento($complemento);
        $this->c->setBairro($bairro);
        $this->c->setMunicipio($municipio);
        $this->c->setUf($uf);
        $this->c->setPais($pais);
        $this->c->setReferencia($referencia);
        $this->c->setCep($cep);


        if($this->c->getCpf() != null && $this->c->getNome() != null){
            $this->cdao->insert($this->c);
            return header("location: gar_form.php?msg=salvo");
        }else{
            return header("location: gar_form.php?msg=erro");
        }
    }

    public function update($id, $cpf, $rg, $nome, $sexo, $datanasc, $numfixo, $numcelular, $estado, $logradouro, $numero, $complemento, $bairro, $municipio, $uf, $pais, $referencia, $cep){

        $this->c->setId($id);
        $this->c->setCpf($cpf);
        $this->c->setRg($rg);
        $this->c->setNome($nome);
        $this->c->setSexo($sexo);
        $this->c->setDtnasc($datanasc);
        $this->c->setNumfixo($numfixo);
        $this->c->setNumcel($numcelular);
        $this->c->setEstado($estado);
        $this->c->setLogradouro($logradouro);
        $this->c->setNumero($numero);
        $this->c->setComplemento($complemento);
        $this->c->setBairro($bairro);
        $this->c->setMunicipio($municipio);
        $this->c->setUf($uf);
        $this->c->setPais($pais);
        $this->c->setReferencia($referencia);
        $this->c->setCep($cep);

        if($this->c->getCpf() != null && $this->c->getNome() != null){
            $this->cdao->update($this->c);
            return header("location: cli_buscar.php?msg=alterado");
        }else{
            return header("location: cli_editar.php?e={$this->c->getId()}msg=erro");
        }
    }

    public function findAll()
    {
        return $this->cdao->findAll();
    }

    public function find($id){
        return $this->cdao->find($id);
    }

    public function buscarPorNome($nome){
       return $this->cdao->findName($nome);
    }

    public function delete($id){
      $this->cdao->delete($id);
    }
}
