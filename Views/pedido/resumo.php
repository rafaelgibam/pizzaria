<?php include __DIR__ . "/../session.php"; ?>
<?php include __DIR__ . "/../layout/head.php";

$cc = new \Controllers\ClienteController();
$mc = new \Controllers\MesaController();
$pc = new \Controllers\ProdutoController();
$gc = new \Controllers\GarcomController();
$ppc = new \Controllers\PedidoPresencialController();

$p = $ppc->findNum($_GET['id']);
$preco = $pc->find($_POST['produtoid'])->PRECO;

if(isset($_POST['abrirpedido'])){

    $total = $_POST['qtdprod'] * $preco;

    $ppc->insert(
        $_POST['numero'],
        $_POST['dtabertura'],
        $_POST['estado'],
        $total,
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

$dtabertura = new DateTime($p->DATA_ABERTURA);

?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <h2>PizzariaCTL</h2>
        </div>
        <div class="col-md-4">
            <h5>Número Pedido:</h5><span><?= $p->NUMERO ?></span>
        </div>
        <div class="col-md-4">
            <h5>Cliente:</h5><span><?= $cc->find($p->CLIENTE_ID)->NOME ?></span>
        </div>
    </div>
    <div class="row mt-4 mt-5">
        <div class="col-md-12">
            <h5 class="text-center">Informações do Pedido:</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>Data Pedido</th>
                        <th>Garçom</th>
                        <th>Mesa</th>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $dtabertura->format("d-m-Y") ?></td>
                        <td><?= $gc->find($p->GARCOM_ID)->NOME ?></td>
                        <td><?= $mc->find($p->MESA_ID)->NOME ?></td>
                        <td><?= $pc->find($p->PRODUTO_ID)->NOME ?></td>
                        <td><?= $p->QTD_PRODUTO ?></td>
                        <td><?= 'R$ '. $p->TOTAL ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label for="obs">Observações:</label>
            <textarea id="obs" cols="120" rows="10" disabled><?= $p->OBSERVACOES ?></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="/pedido/ped_fechar.php" class="btn btn-danger btn-block">Ver Pedidos</a>
        </div>
    </div>
</div>
<?php include __DIR__ . "/../layout/footer.php"; ?>
