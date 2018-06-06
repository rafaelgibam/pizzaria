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

    public function insert($nome, $descricao, $preco, $altura, $comprimento, $largura, $peso, $estado, $fatia, $borda, $cozinheiroid, $qtd)
    {
        // ID	NOME	DESCRICAO	PRECO	ALTURA	COMPRIMENTO	LARGURA	PESO	ESTADO	FATIA	BORDA	COZINHEIRO_ID
        $this->p->setNome($nome);
        $this->p->setDescricao($descricao);
        $this->p->setPreco(str_replace(",",".",$preco));
        $this->p->setAltura(str_replace(",",".",$altura));
        $this->p->setComprimento(str_replace(",",".",$comprimento));
        $this->p->setLargura(str_replace(",",".",$largura));
        $this->p->setPeso(str_replace(",",".",$peso));
        $this->p->setEstado($estado);
        $this->p->setFatia($fatia);
        $this->p->setBorda($borda);
        $this->p->setQtd($qtd);

        $this->co->setId($cozinheiroid);
        $this->p->setCozinheiro($this->co);

        if($this->p->getNome() != null && $this->p->getCozinheiro() != null
        && $this->p->getQtd() != null && $this->p->getPreco() != null){
            $this->pdao->insert($this->p);
            return header("location: prod_form.php?msg=salvo");
        }else{
            return header("location: prod_form.php?msg=erro");
        }


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

        if($this->p->getNome() != null && $this->p->getCozinheiro() != null
            && $this->p->getQtd() != null && $this->p->getPreco() != null){
            $this->pdao->insert($this->p);
            return header("location: prod_buscar.php?msg=editado");
        }else{
            return header("location: prod_editar.php?e={$this->p->getId()}&msg=erro");
        }
    }

    public function findAll()
    {
        return $this->pdao->findAll();
    }

    public function find($id){
        return $this->pdao->find($id);
    }
}
