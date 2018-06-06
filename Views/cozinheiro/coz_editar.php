<?php include __DIR__ . "/../session.php"; ?>
<?php include __DIR__ . "/../layout/head.php"; ?>
<?php include __DIR__ . "/../layout/menucozinheiro.php"; ?>


<div class="container">
    <form method="post" action="salvar.php">
        <div class="row">
            <div class="col-md-12 mt-4">
                <?php include __DIR__ . "/../errors.php"; ?>
                <?php
                    $cc = new \Controllers\CozinheiroController();
                    $c = $cc->find($_GET['e']);
                ?>
                <div class="card">
                    <h5 class="card-header">Dados do Cozinheiro</h5>
                    <div class="card-body">
                        <div class="form-row">
                            <input type="number" name="id" hidden value="<?= $c->ID ?>">
                            <div class="form-group col-3">
                                <label for="nome">Nome(Obrigatório):</label>
                                <input type="text" id="nome" class="form-control" name="nome" value="<?= $c->NOME ?>">
                            </div>
                            <div class="form-group col-2">
                                <label for="cpf">CPF (Obrigatório):</label>
                                <input type="text" id="cpf" maxlength="11" class="form-control" name="cpf" value="<?= $c->CPF ?>">
                            </div>
                            <div class="form-group col-2">
                                <label for="rg">RG:</label>
                                <input type="text" id="rg" maxlength="9" class="form-control" name="rg" value="<?= $c->RG ?>">
                            </div>
                            <div class="form-group col-2">
                                <label for="sexo">Sexo:</label>
                                <select name="sexo" id="sexo" class="form-control">
                                    <option value="masculino">Masculino</option>
                                    <option value="feminino">Feminino</option>

                                </select>
                            </div>
                            <div class="form-group col-3">
                                <label for="datanasc">Data Nascimento:</label>
                                <input type="date" id="datanasc" class="form-control" name="datanasc" value="<?= $c->DATA_NASC ?>">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-2">
                                <label for="numerofixo">Número Fixo:</label>
                                <input type="text" id="numerofixo"  maxlength="11" class="form-control" name="numerofixo" value="<?= $c->NUM_FIXO ?>">
                            </div>
                            <div class="form-group col-2">
                                <label for="numerocelular">Número Celular:</label>
                                <input type="text" id="numerocelular" maxlength="11" class="form-control" name="numerocelular" value="<?= $c->NUM_CELULAR ?>">
                            </div>
                            <div class="form-group col-2">
                                <label for="estado">Estado:</label>
                                <select name="estado" id="estado" class="form-control">
                                    <option value="1">Ativo</option>
                                    <option value="2">Desativado</option>
                                </select>
                            </div>
                            <div class="form-group col-3">
                                <label for="salario">Salário:</label>
                                <input type="number" id="salario" class="form-control" name="salario"  placeholder="R$" value="<?= $c->SALARIO ?>">
                            </div>

                            <div class="form-group col-3">
                                <label for="dataadmissao">Data Admissão:</label>
                                <input type="date" id="dataadmissao" class="form-control" name="dtadmissao" value="<?= $c->DATA_ADMISSAO ?>" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header">Endereço do Cozinheiro</h5>
                    <div class="card-body">

                        <!---  ID LOGRADOURO NUMERO COMPLEMENTO BAIRRO MUNICIPIO UF PAIS REFERENCIA CEP--->
                        <div class="form-row">
                            <div class="form-group col-5">
                                <label for="logradouro">Logradouro:</label>
                                <input type="text" id="logradouro" class="form-control" name="logradouro" value="<?= $c->LOGRADOURO ?>">
                            </div>
                            <div class="form-group col-2">
                                <label for="numero">Número:</label>
                                <input type="text" id="numero" maxlength="8" class="form-control" name="numero" value="<?= $c->NUMERO ?>">
                            </div>
                            <div class="form-group col-2">
                                <label for="bairro">Bairro:</label>
                                <input type="text" id="bairro" class="form-control" name="bairro" value="<?= $c->BAIRRO ?>">
                            </div>

                            <div class="form-group col-3">
                                <label for="municipio">Município:</label>
                                <input type="text" id="municipio" class="form-control" name="municipio" value="<?= $c->MUNICIPIO ?>">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-1">
                                <label for="uf">UF:</label>
                                <input type="text" id="uf" maxlength="2" class="form-control" name="uf" value="<?= $c->UF ?>">
                            </div>
                            <div class="form-group col-2">
                                <label for="pais">Pais:</label>
                                <input type="text" id="pais" class="form-control" name="pais" value="<?= $c->PAIS ?>">
                            </div>
                            <div class="form-group col-3">
                                <label for="referencia">Referência:</label>
                                <input type="text" id="referencia" class="form-control" name="referencia" value="<?= $c->REFERENCIA ?>">
                            </div>

                            <div class="form-group col-2">
                                <label for="cep">CEP:</label>
                                <input type="text" id="cep" maxlength="8" class="form-control" name="cep" value="<?= $c->CEP ?>">
                            </div>

                            <div class="form-group col-4">
                                <label for="complemento">Complemento:</label>
                                <input type="text" id="complemento" class="form-control" name="complemento" value="<?= $c->COMPLEMENTO ?>">
                            </div>
                        </div>

                        <input type="submit" name="cozinheiro-editar" class="btn btn-success btn-block float-right" value="Confirmar Alteração">
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>



<?php include __DIR__ . "/../layout/footer.php"; ?>
