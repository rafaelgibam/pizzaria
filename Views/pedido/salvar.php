<?php

require_once __DIR__ . "/../../autoload.php";

$p = new \Controllers\PedidoPresencialController();

if(isset($_POST['abrirpedido'])){

    $p->insert(
        $_POST['numero'],
        $_POST['dtabertura'],
        $_POST['dtfechado'],
        $_POST['estado'],
        $_POST['total'],
        $_POST['obs'],
        $_POST['garcomid'],
        $_POST['mesaid'],
        $_POST['clienteid'],
        $_POST['produtoid']);
}
