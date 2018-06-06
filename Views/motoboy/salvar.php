<?php
require_once __DIR__ . "/../../autoload.php";

$mc = new \Controllers\MotoBoyController();

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


if(isset($_POST['motoboy-editar'])){
    $mc->update(
        $_POST['id'],
        $_POST['cpf'],
        $_POST['rg'],
        $_POST['nome'],
        $_POST['sexo'],
        $_POST['datanasc'],
        $_POST['numerofixo'],
        $_POST['numerocelular'],
        $_POST['estado'],
        $_POST['placa'],
        $_POST['dtadmissao'],
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