<?php
require_once __DIR__ . "/../../autoload.php";

$p = new \Controllers\ProdutoController();

if(isset($_POST['produto'])){
    $p->insert(
        $_POST['nome'],
        $_POST['descricao'],
        $_POST['preco'],
        $_POST['altura'],
        $_POST['comprimento'],
        $_POST['largura'],
        $_POST['preco'],
        $_POST['estado'],
        $_POST['fatia'],
        $_POST['borda'],
        $_POST['cozinheiroid'],
        $_POST['qtd']
        );
}

if(isset($_POST['produto-editar'])){
    $p->update(
        $_POST['id'],
        $_POST['nome'],
        $_POST['descricao'],
        $_POST['preco'],
        $_POST['altura'],
        $_POST['comprimento'],
        $_POST['largura'],
        $_POST['peso'],
        $_POST['estado'],
        $_POST['fatia'],
        $_POST['borda'],
        $_POST['cozinheiroid'],
        $_POST['qtd']
    );
}
