<?php
    require_once __DIR__ . "/../../autoload.php";

    $cc = new \Controllers\CozinheiroController();
    $mc = new \Controllers\MotoBoyController();
    $gc = new \Controllers\GarcomController();

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

    if(isset($_POST['garcom'])){
        $gc->insert(
            $_POST['cpf'],
            $_POST['rg'],
            $_POST['nome'],
            $_POST['sexo'],
            $_POST['datanasc'],
            $_POST['numerofixo'],
            $_POST['numerocelular'],
            $_POST['estado'],
            $_POST['gorjeta'],
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


