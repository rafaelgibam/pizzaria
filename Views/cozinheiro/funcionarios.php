<?php require_once __DIR__ . "/../session.php"; ?>
<?php include __DIR__ . "/../layout/head.php"; ?>
<?php include __DIR__ . "/../layout/menucozinheiro.php"; ?>

    <div class="container">
        <div class="row mt-2">
            <div class="col-md-12">
                <div class="form-row">
                    <div class="form-group col-8">
                        <input type="search" class="form-control mr-0">
                    </div>
                    <input type="submit" class="form-group col-1 btn btn-primary ml-0" value="pesquisar">

                    <div class=" form-check ml-5 mt-2 col-1">
                        <input type="radio" class="form-check-input">
                        <label class="form-check-label">Garcom</label>
                    </div>

                    <div class=" form-check ml-4 mt-2 col-1">
                        <input type="radio" class="form-check-input">
                        <label class="form-check-label">Motoboy</label>
                    </div>
                </div>
            </div>


        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">CPF</th>
                        <th scope="col">NOME</th>
                        <th scope="col">SEXO</th>
                        <th scope="col">DATA NASCIMENTO</th>
                        <th scope="col">NÚMERO FIXO</th>
                        <th scope="col">NÚMERO CELULAR</th>
                        <th scope="col">ESTADO</th>
                        <th scope="col">GOJETA</th>
                        <th scope="col">DATA ADMISSÃO</th>
                        <th scope="col">SALÁRIO</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $g = new \Controllers\GarcomController();
                    foreach($g->findAll() as $linha): ?>
                        <tr>
                            <th scope="row"><?= $linha->CPF ?></th>
                            <td><?= $linha->NOME ?></td>
                            <td><?= $linha->SEXO = "M" ? "Masculino" : "Feminino" ?></td>
                            <td><?= $linha->DATA_NASC ?></td>
                            <td><?= $linha->NUM_FIXO ?></td>
                            <td><?= $linha->NUM_CELULAR ?></td>
                            <td><?= $linha->ESTADO = 1 ? "Ativo" : "Inativo" ?></td>
                            <td><?= $linha->GOJETA . "%" ?></td>
                            <td><?= $linha->DATA_ADMISSAO ?></td>
                            <td><?= "R$" . $linha->SALARIO ?></td>
                            <td><a href="?action=editar&&id=<?php $linha->ID ?>">[Editar]</a> | [Apagar]</td>
                        </tr>
                    <?php endforeach;?>

                    <?php $m = new \Controllers\MotoBoyController();
                    foreach($m->findAll() as $linha): ?>
                        <tr>
                            <th scope="row"><?= $linha->CPF ?></th>
                            <td><?= $linha->NOME ?></td>
                            <td><?= $linha->SEXO = "M" ? "Masculino" : "Feminino" ?></td>
                            <td><?= $linha->DATA_NASC ?></td>
                            <td><?= $linha->NUM_FIXO ?></td>
                            <td><?= $linha->NUM_CELULAR ?></td>
                            <td><?= $linha->ESTADO = 1 ? "Ativo" : "Inativo" ?></td>
                            <td><?= $linha->PLACA ?></td>
                            <td><?= $linha->DATA_ADMISSAO ?></td>
                            <td><?= "R$" . $linha->SALARIO ?></td>
                            <td><a href="?action=editar&&id=<?php $linha->ID ?>">[Editar]</a> | [Apagar]</td>
                        </tr>
                    <?php endforeach;?>


                    </tbody>
                </table>
            </div>
        </div>

    </div>
<?php include __DIR__ . "/../layout/footer.php"; ?>