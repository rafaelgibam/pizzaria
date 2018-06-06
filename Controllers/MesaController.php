<?php
/**
 * Created by PhpStorm.
 * User: rafaelgibam
 * Date: 24/05/2018
 * Time: 22:20
 */

namespace Controllers;


use DAO\MesaDAO;
use Models\Mesa;

class MesaController
{
    private $m;
    private $mdao;

    public function __construct()
    {
        $this->m = new Mesa();
        $this->mdao = new MesaDAO();
    }

    public function insert($nome, $numero, $cor, $capacidade, $peso, $altura, $comprimento, $largura, $estado){
       // ID NOME NUMERO COR	QTD_LUGAR	PESO	ALTURA	COMPRIMENTO	LARGURA	ESTADO
        $this->m->setNome($nome);
        $this->m->setNumero($numero);
        $this->m->setCor($cor);
        $this->m->setCapacidade($capacidade);
        $this->m->setPeso(str_replace(",",".",$peso));
        $this->m->setAltura(str_replace(",",".",$altura));
        $this->m->setComprimento(str_replace(",",".",$comprimento));
        $this->m->setAltura(str_replace(",",".",$altura));
        $this->m->setLargura(str_replace(",",".",$largura));
        $this->m->setEstado($estado);

        if($this->m->getNome() != null && $this->m->getNumero() != null){
            $this->mdao->insert($this->m);
            return header("location: mesa_form.php?msg=salvo");
        }else{
            return header("location: mesa_form.php?msg=erro");
        }


    }

    public function update(){

    }

    public function find($id){
        $this->mdao->find($id);
    }

    public function findAll(){
        return $this->mdao->findAll();
    }
}