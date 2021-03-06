<?php include __DIR__ . "/../session.php"; ?>
<?php include __DIR__ . "/../layout/head.php"; ?>

<?php
$cc = new \Controllers\ClienteController();
$pc = new \Controllers\ProdutoController();
$mc = new \Controllers\MotoBoyController();

include __DIR__ . "/../layout/menucozinheiro.php";

?>

<div class="container">
    <form method="post" action="resumo.php">
        <div class="row">
            <div class="col-md-12 mt-4">
                <?php include __DIR__ . "/../errors.php"; ?>
                <input type="number" name="estado" value="1" hidden>

                <div class="card">
                    <h5 class="card-header">Abertura de Pedido</h5>
                    <div class="card-body">
                        <div class="form-row">

                            <input type="number" name="estado" value="1" hidden>

                            <div class="form-group col-2">
                                <label for="numerolb">Número:</label>
                                <input type="number" name="numero" id="numerolb" readonly class="form-control" value="<?= rand(1,10000000) ?>">
                            </div>

                            <div class="form-group col-3">
                                <label for="dtabertura">Data Abertura:</label>
                                <input type="date" name="dtabertura" id="dtabertura" class="form-control">
                            </div>

                            <div class="form-group col-3">
                                <label for="dtentrega">Data Entrega:</label>
                                <input type="date" name="dtentrega" id="dtentrega" class="form-control">
                            </div>

                            <div class="form-group col-4">
                                <label for="cliente">Cliente(Obrigatório):</label>
                                <select name="clienteid" id="cliente" class="form-control">
                                    <?php foreach ($cc->findAll() as $cliente):?>
                                        <option value="<?= $cliente->ID ?>"><?= $cliente->NOME . " - ". $cliente->CPF ?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>

                        </div>

                        <div class="form-row">

                            <div class="form-group col-3">
                                <label for="motoboy">MotoBoy(Obrigatório):</label>
                                <select name="motoboyid" id="motoboy" class="form-control">
                                    <?php foreach ($mc->findAll() as $moto):?>
                                        <option value="<?= $moto->ID ?>"><?= $moto->NOME . " - ". $moto->PLACA ?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>

                            <div class="form-group col-2">
                                <label for="precofrete">Preço Frete:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">R$</div>
                                    </div>
                                    <input type="number" class="form-control" id="precofrete" name="precofrete">
                                </div>
                            </div>

                            <div class="form-group col-2">
                                <label for="qtd">Qtd.Prod(Obrigatório):</label>
                                <input type="number" name="qtdprod" id="qtd" class="form-control">
                            </div>

                            <div class="form-group col-5">
                                <label for="produto">Produto(Obrigatório):</label>
                                <select name="produtoid" id="produto" class="form-control">
                                    <?php foreach ($pc->findAll() as $produto):?>
                                        <option value="<?= $produto->ID ?>">
                                            <?= $produto->NOME . " R$ ". $produto->PRECO ?>
                                        </option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="obs">Observações:</label>
                                <textarea name="obs" id="obs" class="form-control" rows="8" cols="80"></textarea>
                            </div>
                        </div>

                        <input type="submit" name="abrir-delivery" value="Abrir Pedido" class="btn btn-success btn-block">
                    </div>

                </div>

            </div>
        </div>
    </form>
</div>

<?php include __DIR__ . "/../layout/footer.php"; ?>
