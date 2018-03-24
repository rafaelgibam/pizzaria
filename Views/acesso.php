<?php
require_once __DIR__ . "/../autoload.php";

session_start();

$cozin = new \Models\Cozinheiro();
$moto = new \Models\MotoBoy();
$garcom = new \Models\Garcom();

$cozin->setCpf($_POST['cpf']);
$moto->setCpf($_POST['cpf']);
$garcom->setCpf($_POST['cpf']);

$cargo = $_POST['cargo'];

$con = \Infra\Conexao::getConnection();

switch ($cargo){
    case 1:
        $sql = "SELECT CPF FROM COZINHEIRO;";
        $stmt = $con->prepare($sql);
        if($stmt->execute()){
            while ($linha = $stmt->fetch()){
                if( $linha->CPF == $cozin->getCpf()){
                    $_SESSION['cozinlogin'] = true;
                    header("location: cozinheiro/index.php");
                    die();
                }else{
                    header("location: index.php");
                }
            }
        }
        break;
    case 2:
        $sql = "SELECT CPF FROM GARCOM;";
        $stmt = $con->prepare($sql);
        if($stmt->execute()){
            while ($linha = $stmt->fetch()){
                if( $linha->CPF == $garcom->getCpf()){
                    $_SESSION['garcomlogin'] = true;
                    header("location: garcom/index.php");
                    die();
                }else{
                    header("location: index.php");
                }
            }
        }
        break;
    case 3:
        $sql = "SELECT CPF FROM MOTOBOY;";
        $stmt = $con->prepare($sql++);
        if($stmt->execute()){
            while ($linha = $stmt->fetch()){
                if( $linha->CPF == $moto->getCpf()){
                    $_SESSION['motologin'] = true;
                    header("location: motoboy/index.php");
                    die();
                }else{
                    header("location: index.php");
                }
            }
        }
        break;
}
