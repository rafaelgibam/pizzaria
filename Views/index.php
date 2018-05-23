<?php require_once __DIR__ . "/../autoload.php"; ?>
<?php include_once __DIR__ . "/layout/head.php"; ?>
<?php include_once __DIR__ . "/layout/menu.php"; ?>

<?php
session_start();

$sessao = (isset($_SESSION['tipo'])) ? $_SESSION['tipo'] : null;

if($sessao == "cozinheiro") {
    header("location: cozinheiro/");
}
if($sessao == "motoboy") {

    header("location: motoboy/");
}

if($sessao == "garcom"){
    header("location: garcom/");
}

?>

<h1 class="text-center">Funcionário acesse sua área administrativa!</h1>

<?php include_once __DIR__ . "/layout/footer.php"; ?>

