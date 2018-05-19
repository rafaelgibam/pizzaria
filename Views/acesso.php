<?php
require_once __DIR__ . "/../autoload.php";

session_start();
$ac = new \Controllers\AcessoController();

$acesso = $ac->acessarLogin($_POST['cpfcnpj'],$_POST['cargo']);

switch ($acesso){
    case 1:
        //Cozinheiro
        $_SESSION['codigo'] = $ac->co->getCnpj();
        $_SESSION['razaosocial'] = $ac->co->getRazaosocial();
        $_SESSION['nome'] = $ac->co->getNome();
        $_SESSION['tipo'] = "cozinheiro";
        header("location: cozinheiro/index.php");
        break;
    case 2:
        //Motoboy
        $_SESSION['codigo'] = $ac->m->getCpf();
        $_SESSION['nome'] = $ac->m->getNome();
        $_SESSION['tipo'] = "motoboy";
        header("location: motoboy/index.php");
        break;
    case 3:
        //Garçom
        $_SESSION['codigo'] = $ac->g->getCpf();
        $_SESSION['nome'] = $ac->g->getNome();
        $_SESSION['tipo'] = "garcom";
        header("location: garcom/index.php");
        break;

    default:
        header("location: index.php");
        break;
}


