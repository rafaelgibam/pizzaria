<?php

namespace Controllers;

use DAO\ClienteDAO;
use Models\Cliente;
use Models\Endereco;

class ClienteController
{
    public function insert($cpf, $rg, $nome, $sexo, $datanasc, $numfixo, $numcelular, $estado, $endereco){
        // ID	CPF	RG	NOME	SEXO	DATA_NASC	NUM_FIXO	NUM_CELULAR	ESTADO	CRIADO_EM	ENDERECO_ID
        $c = new Cliente();
        $cdao = new ClienteDAO();

        $e = new Endereco();
        $e->setId($endereco);

        $c->setCpf($cpf);
        $c->setNome($nome);
        $c->setSexo($sexo);
        $c->setDtnasc($datanasc);
        $c->setNumfixo($numfixo);
        $c->setNumcel($numcelular);
        $c->setEstado($estado);
        $c->setEndereco($e);

        $cdao->insert($c);

    }

    public function update($id, $cpf, $rg, $nome, $sexo, $datanasc, $numfixo, $numcelular, $estado, $endereco){
        $c = new Cliente();
        $cdao = new ClienteDAO();

        $e = new Endereco();
        $e->setId($endereco);

        $c->setId($id);
        $c->setCpf($cpf);
        $c->setRg($rg);
        $c->setNome($nome);
        $c->setSexo($sexo);
        $c->setDtnasc($datanasc);
        $c->setNumfixo($numfixo);
        $c->setNumcel($numcelular);
        $c->setEstado($estado);
        $c->setEndereco($e);

        $cdao->update($c);
    }
}