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
        $sql = "SELECT NOME,CPF FROM COZINHEIRO;";
        $stmt = $con->prepare($sql);
        if($stmt->execute()){
            while ($linha = $stmt->fetch()){
                if( $linha->CPF == $cozin->getCpf()){
                    $_SESSION['cpf'] = $cozin->getCpf();
                    $_SESSION['nome'] = $linha->NOME;
                    header("location: cozinheiro/");
                    die();
                }else{
                    header("location: index.php");
                }
            }
        }
        break;
    case 2:
        $sql = "SELECT NOME,CPF FROM GARCOM;";
        $stmt = $con->prepare($sql);
        if($stmt->execute()){
            while ($linha = $stmt->fetch()){
                if( $linha->CPF == $garcom->getCpf()){
                    $_SESSION['cpf'] = $cozin->getCpf();
                    $_SESSION['nome'] = $linha->NOME;
                    header("location: garcom/");
                    die();
                }else{
                    header("location: index.php");
                }
            }
        }
        break;
    case 3:
        $sql = "SELECT NOME,CPF FROM MOTOBOY;";
        $stmt = $con->prepare($sql++);
        if($stmt->execute()){
            while ($linha = $stmt->fetch()){
                if( $linha->CPF == $moto->getCpf()){
                    $_SESSION['cpf'] = $moto->getCpf();
                    $_SESSION['nome'] = $linha->NOME;
                    header("location: motoboy/");
                    die();
                }else{
                    header("location: index.php");
                }
            }
        }
        break;
}
