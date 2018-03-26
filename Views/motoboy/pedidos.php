<?php
session_start();

if(!isset($_SESSION['cpf'])){
    header("location: /../index.php");
    session_destroy();
}
if(isset($_GET['action'])){
    session_destroy();
    header("location: /../index.php");
}
?>
<?php include __DIR__ . "/../layout/head.php"; ?>
<?php include __DIR__ . "/../layout/menumoto.php"; ?>


    <h1 class="text-center">Pedidos!</h1>


<?php include __DIR__ . "/../layout/footer.php"; ?>