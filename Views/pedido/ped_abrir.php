<?php include __DIR__ . "/../session.php"; ?>
<?php include __DIR__ . "/../layout/head.php"; ?>

<?php
    $cc = new \Controllers\ClienteController();
    $gc = new \Controllers\GarcomController();
    $mc = new \Controllers\MesaController();
    $pc = new \Controllers\ProdutoController();

    if($_SESSION['tipo'] == "garcom"){
        include __DIR__ . "/../layout/menugarcom.php";
    }

    if($_SESSION['tipo'] == "motoboy"){
        include __DIR__ . "/../layout/menugarcom.php";
    }

    if($_SESSION['tipo'] == "cozinheiro"){
        include __DIR__ . "/../layout/menucozinheiro.php";
    }

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
                            <label for="numero">Número:</label>
                            <input type="text" name="numero" id="numero" class="form-control">
                          </div>

                          <div class="form-group col-4">
                            <label for="dtabertura">Data Abertura:</label>
                            <input type="date" name="dtabertura" id="dtabertura" class="form-control">
                          </div>

                          <div class="form-group col-4">
                            <label for="total">Total:</label>
                            <input type="text" name="total" id="total" class="form-control">
                          </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-3">
                                <label for="cliente">Cliente(Obrigatório):</label>
                                <select name="clienteid" id="cliente" class="form-control">
                                    <?php foreach ($cc->findAll() as $cliente):?>
                                    <option value="<?= $cliente->ID ?>"><?= $cliente->NOME . " - ". $cliente->CPF ?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>


                            <div class="form-group col-3">
                                <label for="garcom">Garcom(Obrigatório):</label>
                                <select name="garcomid" id="garcom" class="form-control">
                                    <?php foreach ($gc->findAll() as $garcom):?>
                                        <option value="<?= $garcom->ID ?>"><?= $garcom->NOME . " - ". $garcom->CPF ?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>

                            <div class="form-group col-3">
                                <label for="mesa">Mesa(Obrigatório):</label>
                                <select name="mesaid" id="mesa" class="form-control">
                                    <?php foreach ($mc->findAll() as $mesa):?>
                                        <option value="<?= $mesa->ID ?>"><?= $mesa->NOME . " - ". $mesa->NUMERO ?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>

                            <div class="form-group col-3">
                                <label for="produto">Produto(Obrigatório):</label>
                                <select name="produtoid" id="produto" class="form-control">
                                    <?php foreach ($pc->findAll() as $produto):?>
                                        <option value="<?= $produto->ID ?>"><?= $produto->NOME ?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
</div>



<?php include __DIR__ . "/../layout/footer.php"; ?>
