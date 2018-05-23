<?php include __DIR__ . "/../session.php"; ?>
<?php include __DIR__ . "/../layout/head.php"; ?>
<?php include __DIR__ . "/../layout/menugarcom.php"; ?>
<?php $c = new \Controllers\ClienteController(); ?>
<div class="container">
    <form method="post" action="salvar.php">
        <div class="row mt-4">
            <div class="col-md-12">
                <?php include __DIR__ . "/../errors.php"; ?>
                <div class="card">
                    <h5 class="card-header">Endereço Secundário</h5>
                    <div class="card-body">

                        <!---  ID LOGRADOURO NUMERO COMPLEMENTO BAIRRO MUNICIPIO UF PAIS REFERENCIA CEP--->
                        <div class="form-row">
                            <div class="form-group col-5">
                                <label for="logradouro">Logradouro:</label>
                                <input type="text" id="logradouro" class="form-control" name="logradouro" placeholder="Rua exemplo">
                            </div>
                            <div class="form-group col-2">
                                <label for="numero">Número:</label>
                                <input type="text" id="numero" maxlength="8" class="form-control" name="numero"  placeholder="ex: 367">
                            </div>
                            <div class="form-group col-2">
                                <label for="bairro">Bairro:</label>
                                <input type="text" id="bairro" class="form-control" name="bairro" placeholder="ex: villa x">
                            </div>

                            <div class="form-group col-3">
                                <label for="municipio">Município:</label>
                                <input type="text" id="municipio" class="form-control" name="municipio"  placeholder="ex: recife">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-1">
                                <label for="uf">UF:</label>
                                <input type="text" id="uf" maxlength="2" class="form-control" name="uf" placeholder="ex: PE">
                            </div>
                            <div class="form-group col-2">
                                <label for="pais">Pais:</label>
                                <input type="text" id="pais" class="form-control" name="pais"  placeholder="ex: Brasil">
                            </div>
                            <div class="form-group col-3">
                                <label for="referencia">Referência:</label>
                                <input type="text" id="referencia" class="form-control" name="referencia" placeholder="ex: colégio souza">
                            </div>

                            <div class="form-group col-3">
                                <label for="cep">CEP:</label>
                                <input type="text" id="cep" maxlength="8" class="form-control" name="cep"  placeholder="ex: 50721230">
                            </div>

                            <div class="form-group col-3">
                                <label for="complemento">Complemento:</label>
                                <input type="text" id="complemento" class="form-control" name="complemento"  placeholder="ex: casa">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="cliente">Cliente:</label>
                                <select name="clienteid" id="cliente" class="form-control">
                                    <?php foreach ($c->findAll() as $key => $cliente): ?>
                                        <option value="<?= $cliente->ID ?>"><?= $cliente->NOME ?> - <?= $cliente->CPF ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                        </div>

                        <input type="submit" name="endereco" class="btn btn-success btn-block float-right" value="Cadastrar">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>



<?php include __DIR__ . "/../layout/footer.php"; ?>
