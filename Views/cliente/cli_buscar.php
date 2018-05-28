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
      <table class="table table-sm table-hover">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">CPF</th>
            <th scope="col">RG</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>
        <tbody>
          <?php $cc = new \Controllers\ClienteController(); ?>
          <?php foreach ($cc->findAll() as $key => $c): ?>
            <tr>
              <th scope="row"><?= $c->ID ?></th>
              <td><?= $c->NOME ?></td>
              <td><?= $c->CPF ?></td>
              <td><?= $c->RG ?></td>
              <td><a href="?e=<?= $c->ID ?>">Editar</a> | <a href="?d=<?= $c->ID ?>">Apagar</a></td>
            </tr>
           <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include __DIR__ . "/../layout/footer.php"; ?>
