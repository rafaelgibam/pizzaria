<?php require_once __DIR__ . "/../autoload.php"; ?>
<?php include_once __DIR__ . "/layout/head.php"; ?>
<?php include_once __DIR__ . "/layout/menu.php"; ?>
<pre>
<?php

    $g = new \Models\MotoBoy();
    $gdao = new \DAO\MotoBoyDAO();
    $e = new \Models\Endereco();
    //ID	CPF	RG	NOME	SEXO	DATA_NASC	NUM_FIXO	NUM_CELULAR	ESTADO	GOJETA	DATA_ADMISSAO	SALARIO	ENDERECO_ID
    $e->setId(1);

    //$p->setId(1);
    $g->setCpf("111111");
    $g->setRg("555");
    $g->setNome("Paulo");
    $g->setSexo("Masculino");
    $g->setDtnasc("1994-12-12");
    $g->setNumfixo("255555545");
    $g->setNumcel("44546454");
    $g->setEstado(1);
    $g->setPlaca("PDG3648");
    $g->setDtadmissao("2018-12-12");
    $g->setSalario(2000);
    $g->setEndereco($e);

    $gdao->insert($g);

?>
</pre>
<h1 class="text-center">Funcionário acesse sua área administrativa!</h1>

<?php include_once __DIR__ . "/layout/footer.php"; ?>