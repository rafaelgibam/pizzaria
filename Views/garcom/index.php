<?php
    session_start();

    if(!isset($_SESSION['garcomlogin'])){
        header("location: /../index.php");
        session_destroy();
    }
?>

<?php include __DIR__ . "/../layout/head.php"; ?>
<?php include __DIR__ . "/../layout/menugarcom.php"; ?>


<h1 class="text-center">Bem Vindo Garcom!</h1>


<?php include __DIR__ . "/../layout/footer.php"; ?>