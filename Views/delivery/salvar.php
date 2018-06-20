<?php

require_once __DIR__ . "/../../autoload.php";

$pdc = new \Controllers\PedidoDeliveryController();
$pc = new \Controllers\ProdutoController();

$preco = $pc->find($_POST['produtoid'])->PRECO;

$total = ($_POST['qtdprod'] * $preco) + $_POST['precofrete'];

/*if(isset($_POST['abrir-delivery'])){

    $pdc->insert(
        $_POST['numero'],
        $_POST['dtabertura'],
        $_POST['dtentrega'],
        $_POST['estado'],
        $_POST['total'],
        $_POST['obs'],
        $_POST['motoboyid'],
        $_POST['clienteid'],
        $_POST['produtoid'],
        $_POST['qtdprod'],
        $_POST['precofrete']);

    $pc->saidaProduto(
        $_POST['produtoid'],
        $_POST['qtdprod']);
}*/


if(isset($_POST['editar-delivery'])) {
    $pdc->update(
        $_POST['id'],
        $_POST['numero'],
        $_POST['dtabertura'],
        $_POST['dtentrega'],
        $_POST['estado'],
        $total,
        $_POST['obs'],
        $_POST['motoboyid'],
        $_POST['clienteid'],
        $_POST['produtoid'],
        $_POST['qtdprod'],
        $_POST['precofrete']);
}
