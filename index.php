<?php



require_once "autoload.php";
use Models\Cliente;
use Models\Endereco;


$c = new Cliente();
$e = new Endereco();

$e->setNomerua("Rua doutor Miguel");
$e->setCidade("Recife");


$c->setNome("Rafael");
$c->setSobrenome("Rafael Willames");
$c->setSobrenome("Willames");
$c->setDatanasc("13/12/1994");
$c->setEmail("rafael@rafael.com");
$c->setEndereco($e);

echo $c->getNome() ." ". $c->getSobrenome() . '<br>' .
     $c->getEmail() . '<br>' .
     $c->getEndereco()->getNomeRua() . '<br>' .
     $c->getEndereco()->getCidade() . '<br>' .
     $c->getIdade() . '<br>';