<?php include __DIR__ . "/../session.php"; ?>
<?php include __DIR__ . "/../layout/head.php"; ?>

<?php
$e = new \Controllers\EnderecoController();
$cli = new \Controllers\ClienteController();

include __DIR__ . "/../layout/menucozinheiro.php";

if(isset($_GET['d']) && $_GET['d'] != null){
    $gc->delete($_GET['d']);
}

?>

<div class="container" id="tabela">
    <div class="row mt-4">
        <div class="col-md-12">
            <form>
                <div class="form-row">
                    <div class="form-group col-11">
                        <input type="text" name="b" class="form-control">
                    </div>
                    <div class="form-group col-1">
                        <input type="submit" class="btn btn-success btn-block" value="Buscar">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">

        <div class="col-md-12">
            <?php include __DIR__ . "/../errors.php"; ?>
            <table class="table table-sm table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">LOGRADOURO</th>
                        <th scope="col">NÚMERO</th>
                        <th scope="col">COMPLEMENTO</th>
                        <th scope="col">BAIRRO</th>
                        <th scope="col">CLIENTE</th>
                        <th scope="col">AÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(isset($_GET['b']) && $_GET['b'] != null):?>
                    <?php foreach( $e->buscarPorEndereco($_GET['b']) as $clike ): ?>

                        <?php if($clike != null){ ?>
                            <tr>
                                <th scope="row"><?= $clike->ID ?></th>
                                <td><?= $clike->LOGRADOURO ?></td>
                                <td><?= $clike->NUMERO ?></td>
                                <td><?= $clike->COMPLEMENTO ?></td>
                                <td><?= $clike->BAIRRO ?></td>
                                <td><?= $cli->find($clike->CLIENTE_ID)->NOME ?></td>
                                <td>
                                    <a href="/endereco/end_editar.php?e=<?= $clike->ID ?>">
                                        <i  style="color: blue; text-decoration: none;" class="material-icons">border_color</i>&nbsp;&nbsp;
                                    </a>
                                    <a href="?d=<?= $clike->ID ?>&msg=deletado">
                                        <i style="color: red; text-decoration: none; font-size: 28px;" class="material-icons">delete</i>
                                    </a>
                                </td>
                            </tr>
                        <?php } else { echo "Não conseguimos encontrar, Tente novamente!"; } ?>

                    <?php endforeach; ?>

                <?php else: ?>
                    <?php foreach ($e->findAll() as $c): ?>
                        <tr>
                            <th scope="row"><?= $c->ID ?></th>
                            <td><?= $c->LOGRADOURO ?></td>
                            <td><?= $c->NUMERO ?></td>
                            <td><?= $c->COMPLEMENTO ?></td>
                            <td><?= $c->BAIRRO ?></td>
                            <td><?= $cli->find($c->CLIENTE_ID)->NOME ?></td>
                            <td>
                                <a href="/endereco/end_editar.php?e=<?= $c->ID ?>">
                                    <i  style="color: blue; text-decoration: none;" class="material-icons">border_color</i>&nbsp;&nbsp;
                                </a>
                                <a href="?d=<?= $c->ID ?>&msg=deletado">
                                    <i style="color: red; text-decoration: none; font-size: 28px;" class="material-icons">delete</i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include __DIR__ . "/../layout/footer.php"; ?>
