<?php require_once __DIR__ . "/../autoload.php"; ?>
<?php include_once __DIR__ . "/layout/head.php"; ?>
<?php include_once __DIR__ . "/layout/menu.php"; ?>

<?php

    $e = new \Models\Endereco();
    $e->setLogadouro("RUA PHP");
    $e->setNumero("107");
    $e->setComplemento("Casa");
    $e->setBairro("CordeiroPHP");
    $e->setMunicipio("Recife");
    $e->setUf("PE");
    $e->setPais("Brazil");
    $e->setReferencia("GALEGOPHP");
    $e->setCep("50721230");

    $e->inserir($e);


?>

<h1 class="text-center">Funcionário acesse sua área administrativa!</h1>

<?php include_once __DIR__ . "/layout/footer.php"; ?>