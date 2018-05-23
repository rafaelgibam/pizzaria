<?php include __DIR__ . "/../session.php"; ?>
<?php include __DIR__ . "/../layout/head.php"; ?>
<?php include __DIR__ . "/../layout/menucozinheiro.php"; ?>

<!-- Modal Perfil -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Olá  <?php echo $_SESSION['nome']; ?></h5>
            </div>
            <div class="modal-body">
                <a href="#">Editar Perfil</a>
                <a href="?action=sair">Sair</a>
            </div>
        </div>
    </div>
</div>

<h1 class="text-center">Bem Vindo <?php echo $_SESSION['razaosocial']; ?></h1>


<?php include __DIR__ . "/../layout/footer.php"; ?>