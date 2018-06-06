<?php
require_once __DIR__ . "/../../autoload.php";

$ec = new \Controllers\EnderecoController();

if (isset($_POST['endereco'])) {
  $ec->insert(
    $_POST['logradouro'],
    $_POST['numero'],
    $_POST['complemento'],
    $_POST['bairro'],
    $_POST['municipio'],
    $_POST['uf'],
    $_POST['pais'],
    $_POST['referencia'],
    $_POST['cep'],
    $_POST['clienteid']
  );
}

if(isset($_POST['endereco-editar'])){
    $ec->update(
        $_POST['id'],
        $_POST['logradouro'],
        $_POST['numero'],
        $_POST['complemento'],
        $_POST['bairro'],
        $_POST['municipio'],
        $_POST['uf'],
        $_POST['pais'],
        $_POST['referencia'],
        $_POST['cep'],
        $_POST['clienteid']
    );
}
