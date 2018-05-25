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
        $_POST['cozinheiroid']
        );
}


