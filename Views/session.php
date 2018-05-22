<?php

session_start();

if(!isset($_SESSION['codigo'])){
    header("location: /../index.php");
    session_destroy();
}
if(isset($_GET['action']) && $_GET['action'] == 'sair'){
    session_destroy();
    header("location: /../index.php");
}


