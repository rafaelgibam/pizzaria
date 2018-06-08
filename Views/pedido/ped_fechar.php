<?php include __DIR__ . "/../session.php"; ?>
<?php include __DIR__ . "/../layout/head.php"; ?>

<?php
$ppc = new \Controllers\PedidoPresencialController();
$cc = new \Controllers\ClienteController();

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

if(isset($_GET['p']) && $_GET['p'] == "fechar" && isset($_GET['id']) &&  $_GET['id'] != null){
    $ppc->fecharPedido($_GET['id']);
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
                    <th scope="col">NÚMERO</th>
                    <th scope="col">DATA ABERTURA</th>
                    <th scope="col">ESTADO</th>
                    <th scope="col">CLIENTE</th>
                    <th scope="col">Ação</th>
                </tr>
                </thead>
                <tbody>
                <?php if(isset($_GET['b']) && $_GET['b'] != null):?>
                    <?php foreach( $ppc->buscarPorNumero($_GET['b']) as $clike ): ?>

                        <?php if($clike != null){ ?>
                            <tr>
                                <th scope="row"><?= $clike->ID ?></th>
                                <td><?= $clike->NUMERO ?></td>
                                <td><?= $clike->DATA_ABERTURA ?></td>
                                <td><?= ($clike->ESTADO == 1) ? "ABERTO" : "FECHADO" ?></td>
                                <td><?= $cc->find($clike->CLIENTE_ID)->NOME ?></td>
                                <td>
                                    <a href="/pedido/ped_fechar.php?p=fechar&id=<?= $c->ID ?>" class="btn btn-danger btn-sm">
                                        <i class="material-icons">pause_circle_filled</i>
                                    </a>
                                    <a href="" class="btn btn-primary btn-sm"><i class="material-icons">search</i></a>
                                    <a href="" class="btn btn-info btn-sm"><i class="material-icons">border_color</i></a>
                                </td>
                            </tr>
                        <?php } else { echo "Não conseguimos encontrar, Tente novamente!"; } ?>

                    <?php endforeach; ?>

                <?php else: ?>
                    <?php foreach ($ppc->findAll() as $c):?>
                        <tr>
                            <th scope="row"><?= $c->ID ?></th>
                            <td><?= $c->NUMERO ?></td>
                            <td><?= $c->DATA_ABERTURA ?></td>
                            <td><?= ($c->ESTADO == 1) ? "ABERTO" : "FECHADO"?></td>
                            <td><?= $cc->find($c->CLIENTE_ID)->NOME ?></td>
                            <td>
                                <a href="/pedido/ped_fechar.php?p=fechar&id=<?= $c->ID ?>" class="btn btn-danger btn-sm">
                                    <i class="material-icons">pause_circle_filled</i>
                                </a>
                                <a href="" class="btn btn-primary btn-sm"><i class="material-icons">search</i></a>
                                <a href="" class="btn btn-info btn-sm"><i class="material-icons">border_color</i></a>
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
