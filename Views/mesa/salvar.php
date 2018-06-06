<?php
require_once __DIR__ . "/../../autoload.php";

$mesa = new \Controllers\MesaController();

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

if(isset($_POST['mesa-editar'])){
    $mesa->update(
        $_POST['id'],
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


