<?php
require_once __DIR__ . "/../autoload.php";

session_start();
$ac = new \Controllers\AcessoController();

$acesso = $ac->acessarLogin($_POST['cpfcnpj'],$_POST['cargo']);

switch ($acesso){
    case 1:
        //Cozinheiro
        $_SESSION['codigo'] = $ac->co->getCnpj();
        $_SESSION['nome'] = $ac->co->getNome();
        header("location: cozinheiro/index.php");
        break;
    case 2:
        //Motoboy
        $_SESSION['codigo'] = $ac->m->getCpf();
        $_SESSION['nome'] = $ac->m->getNome();
        header("location: motoboy/index.php");
        break;
    case 3:
        //Garçom
        $_SESSION['codigo'] = $ac->g->getCpf();
        $_SESSION['nome'] = $ac->g->getNome();
        header("location: garcom/index.php");
        break;

    default:
        header("location: index.php");
        break;
}


