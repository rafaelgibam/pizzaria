<?php require_once __DIR__ . "/../autoload.php"; ?>
<?php include_once __DIR__ . "/layout/head.php"; ?>
<?php include_once __DIR__ . "/layout/menu.php"; ?>
<pre>
<?php

    $co = new \Models\Cozinheiro();
    $codao = new \DAO\ClienteDAO();
    $e = new \Models\Endereco();

    $e->setId(1);

    //ID, CPF, RG, CNPJ, RAZAOSOCIAL, NOME, SEXO, DATA_NASC, NUM_FIXO,
    //NUM_CELULAR, ESTADO, SALARIO, DATA_ADMISSAO, ENDERECO_ID
    $co->setCpf("222");
    $co->setRg("333");
    $co->setCnpj("33333");
    $co->setRazaosocial("firma");
    $co->setNome("Cozinheiro");
    $co->setSexo("Masc");
    $co->setDtnasc("2018-12-12");
    $co->setNumfixo("22222");
    $co->setNumcel("4444");
    $co->setEstado(1);
    $co->setSalario("20000");
    $co->setEndereco($e);


    //$codao->update($c->getId(),$c);
    print_r($co);
    $codao->insert($co);

?>
</pre>
<h1 class="text-center">Funcionário acesse sua área administrativa!</h1>

<?php include_once __DIR__ . "/layout/footer.php"; ?>