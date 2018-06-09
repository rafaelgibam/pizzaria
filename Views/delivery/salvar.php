<?php

require_once __DIR__ . "/../../autoload.php";

$pdc = new \Controllers\PedidoDeliveryController();
$pc = new \Controllers\ProdutoController();

if(isset($_POST['abrir-delivery'])){

    $pdc->insert(
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

if(isset($_POST['editar-delivery'])) {
    $pdc->update(
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
