<?php

namespace Controllers;

use DAO\PedidoDeliveryDAO;
use Models\Cliente;
use Models\MotoBoy;
use Models\PedidoDelivery;
use Models\Produto;

class PedidoDeliveryController
{

    private $pdao;
    private $p;
    private $pr;
    private $m;
    private $c;

    public function __construct()
    {
        $this->pdao = new PedidoDeliveryDAO();
        $this->p = new PedidoDelivery();
        $this->pr = new Produto();
        $this->c = new Cliente();
        $this->m = new MotoBoy();
    }

    public function insert($numero, $dtabertura, $dtentrega, $estado, $total, $obs, $motoboyid, $clienteid, $produtoid,
                           $qtdprod, $precofrete){
    //ID	NUMERO	DATA_ABERTURA	DATA_FECHAMENTO, ESTADO,	TOTAL	OBSERVACOES	MOTOBOY_ID CLIENTE_ID	PRODUTO_ID

        $this->p->setNumero($numero);
        $this->p->setDtabertura($dtabertura);
        $this->p->setDtentrega($dtentrega);
        $this->p->setEstado($estado);
        $this->p->setTotal($total);
        $this->p->setObs($obs);
        $this->p->setQtdprod($qtdprod);
        $this->p->setPrecofrete($precofrete);

        $this->m->setId($motoboyid);
        $this->p->setMotoboy($this->m);

        $this->c->setId($clienteid);
        $this->p->setCliente($this->c);

        $this->pr->setId($produtoid);
        $this->p->setProduto($this->pr);

        if($this->p->getNumero() != null && $this->p->getDtabertura() != null && $this->p->getTotal() != null){
            $this->pdao->insert($this->p);
            return header("location: deli_fechar.php?msg=aberto");
        }else{
            return header("location: deli_abrir.php?msg=erro");
        }

    }

    public function update($id, $numero, $dtabertura, $dtentrega, $estado, $total, $obs, $motoboyid, $clienteid, $produtoid,
                           $qtdprod, $precofrete){

        $this->p->setId($id);
        $this->p->setNumero($numero);
        $this->p->setDtabertura($dtabertura);
        $this->p->setDtentrega($dtentrega);
        $this->p->setEstado($estado);
        $this->p->setTotal($total);
        $this->p->setObs($obs);
        $this->p->setQtdprod($qtdprod);
        $this->p->setPrecofrete($precofrete);

        $this->m->setId($motoboyid);
        $this->p->setMotoboy($this->m);

        $this->c->setId($clienteid);
        $this->p->setCliente($this->c);

        $this->pr->setId($produtoid);
        $this->p->setProduto($this->pr);

        if($this->p->getNumero() != null && $this->p->getDtabertura() != null && $this->p->getTotal() != null){
            $this->pdao->update($this->p);
            return header("location: deli_fechar.php?msg=alterado");
        }else{
            return header("location: deli_editar.php?e={$this->p->getId()}&msg=erro");
        }

    }

    public function fecharPedido($id){
        $this->p->setId($id);
        $this->p->setEstado(0);
        $this->p->setDtfechamento(date("Y-m-d"));

        if($this->p->getDtfechamento() != null){
            $this->pdao->fecharPedido($this->p);
            return header("location: deli_fechar.php?msg=fechado");
        }else{
            return header("location: deli_fechar.php?msg=erro");
        }
    }

    public function delete($id){
        $this->pdao->delete($id);
    }

    public function find($id){
        return $this->pdao->find($id);
    }

    public function findAll(){
        return $this->pdao->findAll();
    }

    public function buscarPorNumero($numero){
        return $this->pdao->findPedido($numero);
    }
}