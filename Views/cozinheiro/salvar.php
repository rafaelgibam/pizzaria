<?php
    require_once __DIR__ . "/../../autoload.php";

    $cc = new \Controllers\CozinheiroController();
    $mc = new \Controllers\MotoBoyController();
    $gc = new \Controllers\GarcomController();
    $mesa = new \Controllers\MesaController();

    if(isset($_POST['cozinheiro'])){
        $cc->insert(
            $_POST['cpf'],
            $_POST['rg'],
            $_POST['nome'],
            $_POST['sexo'],
            $_POST['datanasc'],
            $_POST['numerofixo'],
            $_POST['numerocelular'],
            $_POST['estado'],
            $_POST['dataadmissao'],
            $_POST['salario'],
            $_POST['logradouro'],
            $_POST['numero'],
            $_POST['complemento'],
            $_POST['cep'],
            $_POST['bairro'],
            $_POST['municipio'],
            $_POST['uf'],
            $_POST['pais'],
            $_POST['referencia']);
    }

    if(isset($_POST['cozinheiro-editar'])){
        $cc->update(
            $_POST['id'],
            $_POST['cpf'],
            $_POST['rg'],
            $_POST['nome'],
            $_POST['sexo'],
            $_POST['datanasc'],
            $_POST['numerofixo'],
            $_POST['numerocelular'],
            $_POST['estado'],
            $_POST['dtadmissao'],
            $_POST['salario'],
            $_POST['logradouro'],
            $_POST['numero'],
            $_POST['complemento'],
            $_POST['cep'],
            $_POST['bairro'],
            $_POST['municipio'],
            $_POST['uf'],
            $_POST['pais'],
            $_POST['referencia']);
    }

    if(isset($_POST['motoboy'])){
        $mc->insert(
            $_POST['cpf'],
            $_POST['rg'],
            $_POST['nome'],
            $_POST['sexo'],
            $_POST['datanasc'],
            $_POST['numerofixo'],
            $_POST['numerocelular'],
            $_POST['estado'],
            $_POST['placa'],
            $_POST['dataadmissao'],
            $_POST['salario'],
            $_POST['logradouro'],
            $_POST['numero'],
            $_POST['complemento'],
            $_POST['bairro'],
            $_POST['municipio'],
            $_POST['uf'],
            $_POST['pais'],
            $_POST['referencia']);
    }

    if(isset($_POST['mesa'])){
        //// ID NOME NUMERO COR	QTD_LUGAR	PESO	ALTURA	COMPRIMENTO	LARGURA	ESTADO
        $mesa->insert(
            $_POST['nome'],
            $_POST['numero'],
            $_POST['cor'],
            $_POST['capacidade'],
            $_POST['peso'],
            $_POST['altura'],
            $_POST['comprimento'],
            $_POST['largura'],
            $_POST['estado']
        );
    }


