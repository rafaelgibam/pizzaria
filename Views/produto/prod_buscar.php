<?php include __DIR__ . "/../session.php"; ?>
<?php include __DIR__ . "/../layout/head.php"; ?>

<?php
$pc = new \Controllers\ProdutoController();
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

if(isset($_GET['d']) && $_GET['d'] != null){
    $mc->delete($_GET['d']);
}

?>

<div class="container">
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
                        <th scope="col">NOME</th>
                        <th scope="col">DESCRIÇÃO</th>
                        <th scope="col">PREÇO</th>
                        <th scope="col">COZINHEIRO</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(isset($_GET['b']) && $_GET['b'] != null):?>
                    <?php foreach( $pc->buscarPorNome($_GET['b']) as $clike ): ?>
                        <?php if($clike != null){ ?>
                            <tr>
                                <th scope="row"><?= $clike->ID ?></th>
                                <td><?= $clike->NOME ?></td>
                                <td><?= $clike->DESCRICAO ?></td>
                                <td><?= $clike->PRECO ?></td>
                                <td><?= $cc->find($clike->COZINHEIRO_ID)->NOME ?></td>
                                <td>
                                    <a href="/produto/prod_editar.php?e=<?= $clike->ID ?>">
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
                    <?php foreach ($pc->findAll() as $c): ?>
                        <tr>
                            <th scope="row"><?= $c->ID ?></th>
                            <td><?= $c->NOME ?></td>
                            <td><?= $c->DESCRICAO ?></td>
                            <td><?= $c->PRECO ?></td>
                            <td><?= $cc->find($c->COZINHEIRO_ID)->NOME ?></td>
                            <td>
                                <a href="/produto/prod_editar.php?e=<?= $c->ID ?>">
                                    <i  style="color: blue; text-decoration: none;" class="material-icons">border_color</i>
                                    &nbsp;&nbsp;
                                </a>
                                <a href="?d=<?= $c->ID ?>">
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
