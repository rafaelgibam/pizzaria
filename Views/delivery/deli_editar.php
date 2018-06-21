<?php include __DIR__ . "/../session.php"; ?>
<?php include __DIR__ . "/../layout/head.php"; ?>

<?php
$pdc = new \Controllers\PedidoDeliveryController();
$pc = new \Controllers\ProdutoController();
$cc = new \Controllers\ClienteController();
$mc = new \Controllers\MotoBoyController();

include __DIR__ . "/../layout/menucozinheiro.php";

$p = $pdc->find($_GET['e']);

$dtabertura = new DateTime($p->DATA_ABERTURA);
$dtfechamento = new DateTime($p->DATA_FECHAMENTO);

?>

<div class="container">
    <form method="post" action="salvar.php">
        <div class="row">
            <div class="col-md-12 mt-4">
                <?php include __DIR__ . "/../errors.php"; ?>

                <div class="card">
                    <h5 class="card-header">Edição de Pedido</h5>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-4">
                                <input type="number" name="id" value="<?= $_GET['e'] ?>" hidden>
                                <label for="numerolb">Número:</label>
                                <input type="number" id="numerolb" name="numero" readonly class="form-control" value="<?= $p->NUMERO ?>">
                            </div>

                            <div class="form-group col-4">
                                <label for="dtabertura">Data Abertura:</label>
                                <input type="date" name="dtabertura" id="dtabertura" class="form-control" value="<?= $dtabertura->format("Y-m-d") ?>" >
                            </div>

                            <div class="form-group col-4">
                                <label for="dtentrega">Data Entrega:</label>
                                <input type="date" name="dtentrega" id="dtentrega" class="form-control" value="<?= $dtfechamento->format("Y-m-d") ?>" >
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-4">
                                <label for="cliente">Cliente(Obrigatório):</label>
                                <select name="clienteid" id="cliente" class="form-control">
                                    <?php foreach ($cc->findAll() as $cliente):?>
                                        <option value="<?= $cliente->ID ?>"><?= $cliente->NOME . " - ". $cliente->CPF ?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>


                            <div class="form-group col-4">
                                <label for="moto">MotoBoy(Obrigatório):</label>
                                <select name="motoboyid" id="moto" class="form-control">
                                    <?php foreach ($mc->findAll() as $moto):?>
                                        <option value="<?= $moto->ID ?>"><?= $moto->NOME . " - ". $moto->CPF ?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>

                            <div class="form-group col-4">
                                <label for="precofrete">Preço Frete:</label>

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">R$</div>
                                    </div>
                                    <input type="number" class="form-control" id="precofrete" name="precofrete" value="<?= $p->PRECO_FRETE ?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">

                            <div class="form-group col-4">
                                <label for="qtd">Qtd. Produto(Obrigatório):</label>
                                <input type="number" name="qtdprod" id="qtd" class="form-control" value="<?= $p->QTD_PRODUTO ?>">
                            </div>

                            <div class="form-group col-4">
                                <label for="produto">Produto(Obrigatório):</label>
                                <select name="produtoid" id="produto" class="form-control">
                                    <?php foreach ($pc->findAll() as $produto):?>
                                        <option value="<?= $produto->ID ?>"><?=  $produto->NOME  . " - " . "R$ " . $produto->PRECO  ?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>

                            <div class="form-group col-4">
                                <label for="estado">Estado:</label>
                                <select name="estado" id="estado" class="form-control">
                                    <option value="1">ABERTO</option>
                                    <option value="0">FECHADO</option>
                                </select>
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="obs">Observações:</label>
                                <textarea name="obs" id="obs" class="form-control" rows="8" cols="80"><?= $p->OBSERVACOES ?></textarea>
                            </div>
                        </div>

                        <input type="submit" name="editar-delivery" value="Confirmar Alteração" class="btn btn-success btn-block">

                    </div>

                </div>

            </div>
        </div>
    </form>
</div>

<script type="text/javascript" src="/../assets/js/pedido/pedido.js"></script>
<?php include __DIR__ . "/../layout/footer.php"; ?>
