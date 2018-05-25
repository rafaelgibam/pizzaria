<?php
require_once __DIR__ . "/../autoload.php";
require_once "layout/head.php";

session_start();
$ac = new \Controllers\AcessoController();

$acesso = $ac->acessarLogin($_POST['cpfcnpj'],$_POST['cargo']);

switch ($acesso){
    case 1:
        //Cozinheiro
        $_SESSION['codigo'] = $ac->co->getCpf();
        $_SESSION['nome'] = $ac->co->getNome();
        $_SESSION['tipo'] = "cozinheiro";
        header("location: cozinheiro/");
        break;
    case 2:
        //Motoboy
        $_SESSION['codigo'] = $ac->m->getCpf();
        $_SESSION['nome'] = $ac->m->getNome();
        $_SESSION['tipo'] = "motoboy";
        header("location: motoboy/");
        break;
    case 3:
        //Garçom
        $_SESSION['codigo'] = $ac->g->getCpf();
        $_SESSION['nome'] = $ac->g->getNome();
        $_SESSION['tipo'] = "garcom";
        header("location: garcom/");
        break;

    default:
        header("location: /");
        break;
}


