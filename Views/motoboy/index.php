<?php
session_start();

if(!isset($_SESSION['motologin'])){
    header("location: /../index.php");
    session_destroy();
}
?>

<?php include __DIR__ . "/../layout/head.php"; ?>
<?php include __DIR__ . "/../layout/menumoto.php"; ?>


<h1 class="text-center">Bem Vindo Motoboy</h1>


<?php include __DIR__ . "/../layout/footer.php"; ?>