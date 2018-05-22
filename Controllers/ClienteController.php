<?php

namespace Controllers;

use DAO\ClienteDAO;
use Models\Cliente;
use Models\Endereco;

class ClienteController
{
    private $c;
    private $cdao;
    private $e;

    public function __construct()
    {
        $this->c = new Cliente();
        $this->cdao = new ClienteDAO();
        $this->e = new Endereco();
    }

    public function insert($cpf, $rg, $nome, $sexo, $datanasc, $numfixo, $numcelular, $estado, $enderecoid){

        $this->e = new Endereco();
        $this->e->setId($enderecoid);
        $this->c->setCpf($cpf);
        $this->c->setRg($rg);
        $this->c->setNome($nome);
        $this->c->setSexo($sexo);
        $this->c->setDtnasc($datanasc);
        $this->c->setNumfixo($numfixo);
        $this->c->setNumcel($numcelular);
        $this->c->setEstado($estado);
        $this->c->setEndereco($this->e);

        $this->cdao->insert($this->c);

    }

    public function update($id, $cpf, $rg, $nome, $sexo, $datanasc, $numfixo, $numcelular, $estado, $enderecoid){



        $this->c->setId($id);
        $this->c->setCpf($cpf);
        $this->c->setRg($rg);
        $this->c->setNome($nome);
        $this->c->setSexo($sexo);
        $this->c->setDtnasc($datanasc);
        $this->c->setNumfixo($numfixo);
        $this->c->setNumcel($numcelular);
        $this->c->setEstado($estado);

        $this->e->setId($enderecoid);
        $this->c->setEndereco($this->e);

        $this->cdao->update($this->c);
    }

    public function findAll()
    {
        return $this->cdao->findAll();
    }

    public function find($id){
        return $this->cdao->find($id);
    }
}