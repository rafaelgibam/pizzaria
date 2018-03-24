<?php
    session_start();

    if(!isset($_SESSION['cozinlogin'])){
        header("location: /../index.php");
        session_destroy();
    }
?>

<?php include __DIR__ . "/../layout/head.php"; ?>
<?php include __DIR__ . "/../layout/menucozin.php"; ?>


<h1 class="text-center">Bem Vindo! Cozinheiro</h1>


<?php include __DIR__ . "/../layout/footer.php"; ?>