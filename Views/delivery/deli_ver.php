<?php include __DIR__ . "/../session.php"; ?>
<?php include __DIR__ . "/../layout/head.php"; ?>

<?php
$pdc = new \Controllers\PedidoDeliveryController();
$pc = new \Controllers\ProdutoController();
$cc = new \Controllers\ClienteController();
$mc = new \Controllers\MotoBoyController();

if($_SESSION['tipo'] == "garcom"){
    include __DIR__ . "/../layout/menugarcom.php";
}

if($_SESSION['tipo'] == "motoboy"){
    include __DIR__ . "/../layout/menugarcom.php";
}

if($_SESSION['tipo'] == "cozinheiro"){
    include __DIR__ . "/../layout/menucozinheiro.php";
}

$p = $pdc->find($_GET['v']);

?>

<div class="container">
    <form method="post" action="salvar.php">
        <div class="row">
            <div class="col-md-12 mt-4">
                <?php include __DIR__ . "/../errors.php"; ?>

                <div class="card">
                    <h5 class="card-header">Abertura de Pedido</h5>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-4">
                                <label for="numerolb">Número:</label>
                                <input type="number" id="numerolb" disabled class="form-control" value="<?= $p->NUMERO ?>">
                            </div>

                            <div class="form-group col-4">
                                <label for="dtabertura">Data Abertura:</label>
                                <input type="date" disabled id="dtabertura" class="form-control" value="<?= $p->DATA_ABERTURA ?>" >
                            </div>

                            <div class="form-group col-4">
                                <label for="dtentrega">Data Abertura:</label>
                                <input type="date" disabled id="dtentrega" class="form-control" value="<?= $p->DATA_ENTREGA ?>" >
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-4">
                                <label for="cliente">Cliente(Obrigatório):</label>
                                <input type="text" id="cliente" class="form-control" disabled value="<?= $cc->find($p->CLIENTE_ID)->NOME ?>">
                            </div>


                            <div class="form-group col-4">
                                <label for="motoboy">MotoBoy(Obrigatório):</label>
                                <input type="text" id="motoboy" class="form-control" disabled value="<?= $mc->find($p->MOTOBOY_ID)->NOME ?>">
                            </div>

                            <div class="form-group col-4">
                                <label for="frete">Preço Frete(Obrigatório):</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">R$</div>
                                    </div>
                                    <input type="number" id="frete" class="form-control" disabled value="<?= $p->PRECO_FRETE ?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">

                            <div class="form-group col-4">
                                <label for="qtd">Qtd. Produto(Obrigatório):</label>
                                <input type="number" disabled id="qtd"  class="form-control" value="<?= $p->QTD_PRODUTO ?>">
                            </div>

                            <div class="form-group col-4">
                                <label for="produto">Produto(Obrigatório):</label>
                                <input type="text" id="produto" class="form-control" disabled value="<?= $pc->find($p->PRODUTO_ID)->NOME ?>">
                            </div>

                            <div class="form-group col-4">
                                <label for="totallb">Total:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">R$</div>
                                    </div>
                                    <input type="number" class="form-control" disabled id="totallb" value="<?= $p->TOTAL ?>">
                                </div>
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="obs">Observações:</label>
                                <textarea id="obs" class="form-control" disabled rows="8" cols="80"><?= $p->OBSERVACOES ?></textarea>
                            </div>
                        </div>

                        <a href="/delivery/deli_fechar.php" class="btn btn-danger btn-block">Voltar</a>
                    </div>

                </div>

            </div>
        </div>
    </form>
</div>

<script type="text/javascript" src="/../assets/js/pedido/pedido.js"></script>
<?php include __DIR__ . "/../layout/footer.php"; ?>
