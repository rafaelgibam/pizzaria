<?php


namespace Controllers;


use DAO\ProdutoDAO;
use Models\Cozinheiro;
use Models\Produto;

class ProdutoController
{
    private $p;
    private $pdao;
    private $co;

    public function __construct()
    {
        $this->p = new Produto();
        $this->pdao = new ProdutoDAO();
        $this->co = new Cozinheiro();
    }

    public function insert($nome, $descricao, $preco, $altura, $comprimento, $largura, $peso, $estado, $fatia, $borda, $cozinheiroid)
    {
        // ID	NOME	DESCRICAO	PRECO	ALTURA	COMPRIMENTO	LARGURA	PESO	ESTADO	FATIA	BORDA	COZINHEIRO_ID
        $this->p->setNome($nome);
        $this->p->setDescricao($descricao);
        $this->p->setPreco($preco);
        $this->p->setAltura($altura);
        $this->p->setComprimento($comprimento);
        $this->p->setLargura($largura);
        $this->p->setPeso($peso);
        $this->p->setEstado($estado);
        $this->p->setFatia($fatia);
        $this->p->setBorda($borda);

        $this->co->setId($cozinheiroid);
        $this->p->setCozinheiro($this->co);

        $this->pdao->insert($this->p);

    }

    public function update($id, $nome, $descricao, $preco, $altura, $comprimento, $largura, $peso, $estado, $fatia, $borda, $cozinheiroid)
    {
        $this->p->setId($id);
        $this->p->setNome($nome);
        $this->p->setDescricao($descricao);
        $this->p->setPreco($preco);
        $this->p->setAltura($altura);
        $this->p->setComprimento($comprimento);
        $this->p->setLargura($largura);
        $this->p->setPeso($peso);
        $this->p->setEstado($estado);
        $this->p->setFatia($fatia);
        $this->p->setBorda($borda);

        $this->co->setId($cozinheiroid);
        $this->p->setCozinheiro($this->co);

        $this->pdao->insert($this->p);
    }
}