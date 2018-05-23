<?php

namespace Controllers;

use DAO\MotoBoyDAO;
use Models\Endereco;
use Models\MotoBoy;

class MotoBoyController
{
    private $m;
    private $mdao;
    private $e;

    public function __construct()
    {
        $this->m  = new MotoBoy();
        $this->mdao = new MotoBoyDAO();
        $this->e = new Endereco();
    }

    public function insert($cpf, $rg, $nome, $sexo, $datanasc, $numfixo, $numcel, $estado, $placa, $dtadmissao, $salario,
                           $logradouro, $numero, $complemento, $bairro, $municipio, $uf, $pais, $referencia)
    {
        $this->m->setCpf($cpf);
        $this->m->setRg($rg);
        $this->m->setNome($nome);
        $this->m->setSexo($sexo);
        $this->m->setDtnasc($datanasc);
        $this->m->setNumfixo($numfixo);
        $this->m->setNumcel($numcel);
        $this->m->setEstado($estado);
        $this->m->setPlaca($placa);
        $this->m->setDtadmissao($dtadmissao);
        $this->m->setSalario($salario);
        $this->m->setLogradouro($logradouro);
        $this->m->setNumero($numero);
        $this->m->setComplemento($complemento);
        $this->m->setBairro($bairro);
        $this->m->setMunicipio($municipio);
        $this->m->setUf($uf);
        $this->m->setPais($pais);
        $this->m->setReferencia($referencia);

        if($this->m->getCpf() != null && $this->m->getNome() != null){
            $this->mdao->insert($this->m);
            return header("location: mot_form.php?msg=salvo");
        }else{
            return header("location: mot_form.php?msg=erro");
        }

    }

    public function update($id, $cpf, $rg, $nome, $sexo, $datanasc, $numfixo, $numcel, $estado, $placa, $dtadmissao, $salario,
                           $logradouro, $numero, $complemento, $bairro, $municipio, $uf, $pais, $referencia)
    {
        $this->m->setId($id);
        $this->m->setCpf($cpf);
        $this->m->setRg($rg);
        $this->m->setNome($nome);
        $this->m->setSexo($sexo);
        $this->m->setDtnasc($datanasc);
        $this->m->setNumfixo($numfixo);
        $this->m->setNumcel($numcel);
        $this->m->setEstado($estado);
        $this->m->setPlaca($placa);
        $this->m->setDtadmissao($dtadmissao);
        $this->m->setSalario($salario);
        $this->m->setLogradouro($logradouro);
        $this->m->setNumero($numero);
        $this->m->setComplemento($complemento);
        $this->m->setBairro($bairro);
        $this->m->setMunicipio($municipio);
        $this->m->setUf($uf);
        $this->m->setPais($pais);
        $this->m->setReferencia($referencia);


        $this->mdao->insert($this->m);
    }

    public function findAll()
    {
        return $this->mdao->findAll();
    }

    public function find($id){
        return $this->mdao->find($id);
    }
}