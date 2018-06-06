<?php include __DIR__ . "/../session.php"; ?>
<?php include __DIR__ . "/../layout/head.php"; ?>
<?php include __DIR__ . "/../layout/menucozinheiro.php";

$mc = new \Controllers\MesaController();

if(isset($_GET['e']) && $_GET['e'] != null){
    $m = $mc->find($_GET['e']);
}

?>

<div class="container">
    <form method="post" action="salvar.php">
        <div class="row">
            <div class="col-md-12 mt-4">
                <?php include __DIR__ . "/../errors.php"; ?>
                <input type="number" name="id" hidden value="<?= $m->ID ?>">
                <div class="card">
                    <h5 class="card-header">Dados da Mesa</h5>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-4">
                                <label for="nome">Nome(Obrigatório):</label>
                                <input type="text" id="nome" class="form-control" name="nome" value="<?= $m->NOME ?>">
                            </div>
                            <div class="form-group col-2">
                                <label for="numero">Número(Obrigatório):</label>
                                <input type="text" id="numero" class="form-control" name="numero" value="<?= $m->NUMERO ?>">
                            </div>
                            <div class="form-group col-2">
                                <label for="cor">Cor:</label>
                                <input type="text" id="cor" class="form-control" name="cor" value="<?= $m->COR ?>">
                            </div>
                            <div class="form-group col-2">
                                <label for="capacidade">Capacidade</label>
                                <input type="text" id="capacidade" class="form-control" name="capacidade" value="<?= $m->QTD_LUGAR ?>">
                            </div>

                            <div class="form-group col-2">
                                <label for="peso">Peso:</label>
                                <input type="text" id="peso" class="form-control" name="peso" value="<?= $m->PESO ?>">
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-3">
                                <label for="comprimento">Comprimento:</label>
                                <input type="text" id="comprimento" class="form-control" name="comprimento" value="<?= $m->COMPRIMENTO ?>">
                            </div>
                            <div class="form-group col-3">
                                <label for="largura">Largura:</label>
                                <input type="text" id="largura" class="form-control" name="largura"  value="<?= $m->LARGURA ?>">
                            </div>
                            <div class="form-group col-3">
                                <label for="altura">Altura:</label>
                                <input type="text" id="altura" class="form-control" name="altura" value="<?= $m->ALTURA ?>">
                            </div>
                            <div class="form-group col-3">
                                <label for="estado">Estado:</label>
                                <select name="estado" id="estado" class="form-control">
                                    <option value="1">Ativo</option>
                                    <option value="2">Desativado</option>

                                </select>
                            </div>

                            <input type="submit" name="mesa-editar" class="btn btn-success btn-block" value="Confirmar Alteração">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>



<?php include __DIR__ . "/../layout/footer.php"; ?>
