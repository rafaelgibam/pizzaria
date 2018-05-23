<?php
require_once __DIR__ . "/../../autoload.php";

$c = new \Controllers\ClienteController();
$e = new \Controllers\EnderecoController();

if(isset($_POST['cliente'])){
    $c->insert(
        $_POST['cpf'],
        $_POST['rg'],
        $_POST['nome'],
        $_POST['sexo'],
        $_POST['datanasc'],
        $_POST['numerofixo'],
        $_POST['numerocelular'],
        $_POST['estado'],
        $_POST['logradouro'],
        $_POST['numero'],
        $_POST['complemento'],
        $_POST['bairro'],
        $_POST['municipio'],
        $_POST['uf'],
        $_POST['pais'],
        $_POST['referencia'],
        $_POST['cep']);
}

if(isset($_POST['endereco'])){
    $e->insert(
        $_POST['logradouro'],
        $_POST['numero'],
        $_POST['complemento'],
        $_POST['bairro'],
        $_POST['municipio'],
        $_POST['uf'],
        $_POST['pais'],
        $_POST['referencia'],
        $_POST['cep'],
        $_POST['clienteid']);
}


