<?php
    if(isset($_SESSION['cpf'])){
        session_destroy();
    }
?>

<?php include __DIR__ . "/layout/head.php"; ?>
<?php include __DIR__ . "/layout/menu.php"; ?>


<h1 class="text-center">Funcionário acesse sua área administrativa!</h1>


<?php include __DIR__ . "/layout/footer.php"; ?>