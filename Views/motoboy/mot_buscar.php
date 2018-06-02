<?php include __DIR__ . "/../session.php"; ?>
<?php include __DIR__ . "/../layout/head.php"; ?>

<?php
$gc = new \Controllers\GarcomController();

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
    $gc->delete($_GET['d']);
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
                    <th scope="col">CPF</th>
                    <th scope="col">RG</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Ação</th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($_GET['b']) && $_GET['b'] != null):?>
                    <?php foreach( $gc->buscarPorNome($_GET['b']) as $clike ): ?>

                        <?php if($clike != null){ ?>
                            <tr>
                                <th scope="row"><?= $clike->ID ?></th>
                                <td><?= $clike->NOME ?></td>
                                <td><?= $clike->CPF ?></td>
                                <td><?= $clike->RG ?></td>
                                <td><?= ($clike->ESTADO == 1) ? "Ativo" : "Desativado" ?></td>
                                <td>
                                    <a href="?e=<?= $clike->ID ?>">
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
                    <?php foreach ($gc->findAll() as $c): ?>
                        <tr>
                            <th scope="row"><?= $c->ID ?></th>
                            <td><?= $c->NOME ?></td>
                            <td><?= $c->CPF ?></td>
                            <td><?= $c->RG ?></td>
                            <td><?= ($c->ESTADO == 1) ? "Ativo" : "Desativado" ?></td>
                            <td>
                                <a href="/garcom/mot_editar.php?e=<?= $c->ID ?>">
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
