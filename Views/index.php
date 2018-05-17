<?php require_once __DIR__ . "/../autoload.php"; ?>
<?php include_once __DIR__ . "/layout/head.php"; ?>
<?php include_once __DIR__ . "/layout/menu.php"; ?>
<pre>
<?php

    $p = new \Models\Produto();
    $pdao = new \DAO\ProdutoDAO();

    //ID	NOME	DESCRICAO	PRECO	ALTURA	COMPRIMENTO	LARGURA	PESO	ESTADO	FATIA	BORDA

    //$p->setId(1);
    $p->setNome("Pizza Mussarela");
    $p->setDescricao("COM TOMATE");
    $p->setPreco(20.5);
    $p->setAltura(1.5);
    $p->setComprimento(2.5);
    $p->setLargura(1.2);
    $p->setPeso(10.5);
    $p->setEstado(1);
    $p->setFatia(2);
    $p->setBorda(1);

    $pdao->insert($p);

?>
</pre>
<h1 class="text-center">Funcionário acesse sua área administrativa!</h1>

<?php include_once __DIR__ . "/layout/footer.php"; ?>