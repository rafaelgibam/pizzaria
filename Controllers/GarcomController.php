<?php

namespace Controllers;

use DAO\GarcomDAO;
use Models\Endereco;
use Models\Garcom;

class GarcomController
{
    private $g;
    private $gdao;
    private $e;

    public function __construct()
    {
        $this->g = new Garcom();
        $this->gdao = new GarcomDAO();
        $this->e = new Endereco();
    }

    public function insert($cpf, $rg, $nome, $sexo, $datanasc, $numfixo, $numcel, $estado, $gojeta, $dtadmissao, $salario, $enderecoid)
    {
        // ID	CPF		RG NOME	SEXO	DATA_NASC	NUM_FIXO	NUM_CELULAR	ESTADO	GOJETA	DATA_ADMISSAO	SALARIO	ENDERECO_ID

        $this->g->setCpf($cpf);
        $this->g->setRg($rg);
        $this->g->setNome($nome);
        $this->g->setSexo($sexo);
        $this->g->setDtnasc($datanasc);
        $this->g->setNumfixo($numfixo);
        $this->g->setNumcel($numcel);
        $this->g->setEstado($estado);
        $this->g->setGojeta($gojeta);
        $this->g->setDtadmissao($dtadmissao);
        $this->g->setSalario($salario);

        $this->e->setId($enderecoid);
        $this->g->setEndereco($this->e);

        $this->gdao->insert($this->g);

    }

    public function update($id, $cpf, $rg, $nome, $sexo, $datanasc, $numfixo, $numcel, $estado, $gojeta, $dtadmissao, $salario, $enderecoid)
    {
        $this->g->setId($id);
        $this->g->setCpf($cpf);
        $this->g->setRg($rg);
        $this->g->setNome($nome);
        $this->g->setSexo($sexo);
        $this->g->setDtnasc($datanasc);
        $this->g->setNumfixo($numfixo);
        $this->g->setNumcel($numcel);
        $this->g->setEstado($estado);
        $this->g->setGojeta($gojeta);
        $this->g->setDtadmissao($dtadmissao);
        $this->g->setSalario($salario);

        $this->e->setId($enderecoid);
        $this->g->setEndereco($this->e);

        $this->gdao->insert($this->g);
    }
}