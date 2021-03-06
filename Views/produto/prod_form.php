<?php include __DIR__ . "/../session.php"; ?>
<?php include __DIR__ . "/../layout/head.php"; ?>

<?php
$cc = new \Controllers\CozinheiroController();

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
                            <h5 class="card-header">Cadastro de Produto</h5>
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-8">
                                        <label for="nome">Nome(Obrigatório):</label>
                                        <input type="text" id="nome" name="nome" class="form-control">
                                    </div>
                                    <div class="form-group col-2">
                                        <label for="preco">Preço:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">R$</div>
                                            </div>
                                            <input type="text" id="preco" name="preco" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group col-2">
                                      <label for="qtd">Quantidade(Obrigatório):</label>
                                      <input type="number" name="qtd" class="form-control">
                                    </div>

                                </div>

                                <div class="form-row">
                                    <div class="form-group col-2">
                                        <label for="altura">Altura:</label>
                                        <input type="text" id="altura" name="altura" class="form-control">
                                    </div>

                                    <div class="form-group col-2">
                                        <label for="comprimento">Comprimento:</label>
                                        <input type="text" id="comprimento" name="comprimento" class="form-control">
                                    </div>
                                    <div class="form-group col-4">
                                        <label for="largura">Largura:</label>
                                        <input type="text" id="largura" name="largura" class="form-control">
                                    </div>
                                    <div class="form-group col-4">
                                        <label for="estado">Estado:</label>
                                        <select name="estado" id="estado" class="form-control">
                                            <option value="1">Ativo</option>
                                            <option value="0">Desativado</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-3">
                                        <label for="fatia">Fatia:</label>
                                        <select class="form-control" name="fatia">
                                          <option value="4">Quatro Fatias</option>
                                          <option value="8">Oito Fatias</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-3">
                                        <label for="borda">Borda:</label>
                                        <select name="borda" id="borda" class="form-control">
                                            <option value="0">Sem Borda</option>
                                            <option value="1">Com Borda</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-3">
                                        <label for="peso">Peso:</label>
                                        <input type="text" id="peso" name="peso" class="form-control">
                                    </div>
                                    <div class="form-group col-3">
                                        <label for="cozinheiro">Cozinheiro:</label>
                                        <select name="cozinheiroid" id="cozinheiro" class="form-control">
                                            <?php foreach ($cc->findAll() as $cozinheiro):?>
                                                <option value="<?= $cozinheiro->ID ?>"><?= $cozinheiro->NOME . " - ". $cozinheiro->CPF ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label for="descricao">Descrição:</label>
                                        <textarea name="descricao" class="form-control" id="descricao" cols="30" rows="10"></textarea>
                                    </div>
                                </div>

                            <input type="submit" class="btn btn-success btn-block" name="produto" value="Cadastrar">
                        </div>
                    </div>
                </div>
            </div>
        </form>
</div>

<?php include __DIR__ . "/../layout/footer.php"; ?>
