<?php

require_once __DIR__ . "/../../autoload.php";

$p = new \Controllers\PedidoPresencialController();
$pc = new \Controllers\ProdutoController();

if(isset($_POST['abrirpedido'])){

    $p->insert(
        $_POST['numero'],
        $_POST['dtabertura'],
        $_POST['estado'],
        $_POST['total'],
        $_POST['obs'],
        $_POST['garcomid'],
        $_POST['mesaid'],
        $_POST['clienteid'],
        $_POST['produtoid'],
        $_POST['qtdprod']);

    $pc->saidaProduto(
        $_POST['produtoid'],
        $_POST['qtdprod']);
}

if(isset($_POST['editar-pedido'])) {
    $p->update(
        $_POST['id'],
        $_POST['numero'],
        $_POST['dtabertura'],
        $_POST['estado'],
        $_POST['total'],
        $_POST['obs'],
        $_POST['garcomid'],
        $_POST['mesaid'],
        $_POST['clienteid'],
        $_POST['produtoid']
    );
}
