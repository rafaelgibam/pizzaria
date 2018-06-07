<?php
/**
 * Created by PhpStorm.
 * User: rafaelgibam
 * Date: 28/05/2018
 * Time: 13:45
 */

namespace Controllers;


use DAO\PedidoPresencialDAO;
use Models\Cliente;
use Models\Garcom;
use Models\Mesa;
use Models\PedidoPresencial;
use Models\Produto;

class PedidoPresencialController
{

    private $pdao;
    private $p;
    private $pr;
    private $g;
    private $m;
    private $c;

    public function __construct()
    {
        $this->pdao = new PedidoPresencialDAO();
        $this->p = new PedidoPresencial();
        $this->pr = new Produto();
        $this->g = new Garcom();
        $this->m = new Mesa();
        $this->c = new Cliente();
    }

    public function insert($numero, $dtabertura, $estado, $total, $obs, $garcomid, $mesaid, $clienteid, $produtoid){
    //ID	NUMERO	DATA_ABERTURA	DATA_FECHAMENTO, ESTADO,	TOTAL	OBSERVACOES	GARCOM_ID	MESA_ID	CLIENTE_ID	PRODUTO_ID

        $this->p->setNumero($numero);
        $this->p->setDtabertura($dtabertura);
        $this->p->setEstado($estado);
        $this->p->setTotal($total);
        $this->p->setObs($obs);

        $this->g->setId($garcomid);
        $this->p->setGarcom($this->g);

        $this->m->setId($mesaid);
        $this->p->setMesa($this->m);

        $this->c->setId($clienteid);
        $this->p->setCliente($this->c);

        $this->pr->setId($produtoid);
        $this->p->setProduto($this->pr);

        if($this->p->getNumero() != null && $this->p->getDtabertura() != null && $this->p->getTotal() != null){
            $this->pdao->insert($this->p);
            return header("location: ped_abrir.php?msg=salvo");
        }else{
            return header("location: ped_abrir.php?msg=erro");
        }

    }

    public function update(){

    }
}