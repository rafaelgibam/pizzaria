<?php session_start(); ?>

<?php
    if(!empty($_SESSION)){
        switch ($_SESSION['tipo']){
            case "cozinheiro":
                header("location: cozinheiro/index.php");
                break;
            case "motoboy":
                header("location: motoboy/index.php");
                break;
            case "garcom":
                header("location: garcom/index.php");
            default:
                header("location: index.php");
        }
    }
?>

<?php require_once __DIR__ . "/../autoload.php"; ?>
<?php include_once __DIR__ . "/layout/head.php"; ?>
<?php include_once __DIR__ . "/layout/menu.php"; ?>

<h1 class="text-center">Funcionário acesse sua área administrativa!</h1>

<?php include_once __DIR__ . "/layout/footer.php"; ?>

