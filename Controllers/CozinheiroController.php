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

    public function insert($cpf, $rg, $nome, $sexo, $datanasc, $numfixo, $numcel, $estado, $dtadmissao,
                           $salario, $logradouro, $numero, $complemento, $bairro, $municipio, $uf, $pais, $referencia)
    {
        // ID	CNPJ	RAZAOSOCIAL	NOME	SEXO	DATA_NASC	NUM_FIXO	NUM_CELULAR	ESTADO	ENDERECO_ID

        $this->co->setCpf($cpf);
        $this->co->setRg($rg);
        $this->co->setNome($nome);
        $this->co->setSexo($sexo);
        $this->co->setDtnasc($datanasc);
        $this->co->setNumfixo($numfixo);
        $this->co->setNumcel($numcel);
        $this->co->setEstado($estado);
        $this->co->setDtadmissao($dtadmissao);
        $this->co->setSalario($salario);
        $this->co->setLogradouro($logradouro);
        $this->co->setNumero($numero);
        $this->co->setComplemento($complemento);
        $this->co->setBairro($bairro);
        $this->co->setMunicipio($municipio);
        $this->co->setUf($uf);
        $this->co->setPais($pais);
        $this->co->setReferencia($referencia);


        if($this->co->getCpf() != null && $this->co->getNome() != null){
            $this->codao->insert($this->co);
            return header("location: coz_form.php?msg=salvo");
        }else{
            return header("location: coz_form.php?msg=erro");
        }


    }

    public function update($cpf, $rg, $nome, $sexo, $datanasc, $numfixo, $numcel, $estado, $dtadmissao,
                           $salario, $logradouro, $numero, $complemento, $bairro, $municipio, $uf, $pais, $referencia)
    {

        $this->co->setCpf($cpf);
        $this->co->setRg($rg);
        $this->co->setNome($nome);
        $this->co->setSexo($sexo);
        $this->co->setDtnasc($datanasc);
        $this->co->setNumfixo($numfixo);
        $this->co->setNumcel($numcel);
        $this->co->setEstado($estado);
        $this->co->setDtadmissao($dtadmissao);
        $this->co->setSalario($salario);
        $this->co->setLogradouro($logradouro);
        $this->co->setNumero($numero);
        $this->co->setComplemento($complemento);
        $this->co->setBairro($bairro);
        $this->co->setMunicipio($municipio);
        $this->co->setUf($uf);
        $this->co->setPais($pais);
        $this->co->setReferencia($referencia);

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