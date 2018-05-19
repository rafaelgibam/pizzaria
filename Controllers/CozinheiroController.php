<?php


namespace Controllers;


use DAO\CozinheiroDAO;
use Models\Cozinheiro;
use Models\Endereco;

class CozinheiroController
{
    private $co;
    private $codao;
    private $e;

    public function __construct()
    {
        $this->co = new Cozinheiro();
        $this->codao = new CozinheiroDAO();
        $this->e = new Endereco();
    }

    public function insert($cnpj, $razaosocial, $nome, $sexo, $datanasc, $numfixo, $numcel, $salario, $estado, $enderecoid)
    {
        // ID	CNPJ	RAZAOSOCIAL	NOME	SEXO	DATA_NASC	NUM_FIXO	NUM_CELULAR	SALARIO	ESTADO	ENDERECO_ID

        $this->e->setId($enderecoid);

        $this->co->setCnpj($cnpj);
        $this->co->setRazaosocial($razaosocial);
        $this->co->setNome($nome);
        $this->co->setSexo($sexo);
        $this->co->setDtnasc($datanasc);
        $this->co->setNumfixo($numfixo);
        $this->co->setNumcel($numcel);
        $this->co->setSalario($salario);
        $this->co->setEstado($estado);

        $this->co->setEndereco($this->e);

        $this->codao->insert($this->co);

    }

    public function update($id, $cnpj, $razaosocial, $nome, $sexo, $datanasc, $numfixo, $numcel, $salario, $estado, $enderecoid)
    {


        $this->co->setId($id);
        $this->co->setCnpj($cnpj);
        $this->co->setRazaosocial($razaosocial);
        $this->co->setNome($nome);
        $this->co->setSexo($sexo);
        $this->co->setDtnasc($datanasc);
        $this->co->setNumfixo($numfixo);
        $this->co->setNumcel($numcel);
        $this->co->setSalario($salario);
        $this->co->setEstado($estado);

        $this->e->setId($enderecoid);
        $this->co->setEndereco($this->e);

        $this->codao->insert($this->co);
    }

    public function findAll()
    {
        return $this->codao->findAll();
    }

    public function find($id){
        return $this->codao->find($id);
    }


}