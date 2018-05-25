<?php


namespace Controllers;

use DAO\CozinheiroDAO;
use DAO\GarcomDAO;
use DAO\MotoBoyDAO;
use Models\Cozinheiro;
use Models\Garcom;
use Models\MotoBoy;

class AcessoController
{
    public $co;
    public $g;
    public $m;
    private $codao;
    private $mdao;
    private $gdao;

    function __construct()
    {
        $this->co = new Cozinheiro();
        $this->g = new Garcom();
        $this->m = new MotoBoy();
        $this->codao = new CozinheiroDAO();
        $this->mdao = new MotoBoyDAO();
        $this->gdao = new GarcomDAO();
    }

    public function acessarLogin($codigo, $cargo)
    {
        if(isset($codigo) && isset($cargo) || $codigo != null && $cargo != null){
            // Cozinheiro
            foreach ($this->codao->findAll() as $key => $value){
                if($value->CNPJ == $codigo && $cargo == 1){
                    $this->co->setNome($value->NOME);
                    $this->co->setCpf($value->CPF);
                    return $cargo;
                }
            }

            // Motoboy
            foreach ($this->mdao->findAll() as $key => $value){
                if($value->CPF == $codigo && $cargo == 2){
                    $this->m->setNome($value->NOME);
                    $this->m->setCpf($value->CPF);
                    return $cargo;
                }
            }

            // Garçom
            foreach ($this->gdao->findAll() as $key => $value){
                if($value->CPF == $codigo && $cargo == 3){
                    $this->g->setNome($value->NOME);
                    $this->g->setCpf($value->CPF);
                    return $cargo;
                }
            }
        }

        return null;
    }

}