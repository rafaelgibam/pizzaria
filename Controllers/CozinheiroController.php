<?php


namespace Controllers;


use DAO\CozinheiroDAO;
use Models\Cozinheiro;

class CozinheiroController
{
    public function insert($cnpj, $razaosocial, $nome, $sexo, $datanasc, $numfixo, $numcel, $salario, $estado, $enderecoid){
        // ID	CNPJ	RAZAOSOCIAL	NOME	SEXO	DATA_NASC	NUM_FIXO	NUM_CELULAR	SALARIO	ESTADO	ENDERECO_ID

        $co = new Cozinheiro();
        $codao = new CozinheiroDAO();


    }

    public function update(){

    }
}