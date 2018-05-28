<?php
/**
 * Created by PhpStorm.
 * User: rafaelgibam
 * Date: 28/05/2018
 * Time: 13:45
 */

namespace Controllers;


use DAO\PedidoPresencialDAO;
use Models\PedidoPresencial;

class PedidoPresencialController
{

    private $pdao;
    private $p;

    public function __construct()
    {
        $this->pdao = new PedidoPresencialDAO();
        $this->p = new PedidoPresencial();
    }

    public function insert($numero, $dtabertura, $dtfechado, $estado, $total, $obs, $garcomid, $mesaid, $clienteid, $produtoid){
    //ID	NUMERO	DATA_ABERTURA	DATA_FECHAMENTO, ESTADO,	TOTAL	OBSERVACOES	GARCOM_ID	MESA_ID	CLIENTE_ID	PRODUTO_ID

        $this->p->setNumero($numero);
        $this->p->setDtabertura($dtabertura);
        $this->p->setDtfechamento($dtfechado);
        $this->p->setEstado($estado);
        $this->p->setTotal($total);
        $this->p->setObs($obs);
        $this->p->setGarcom($garcomid);
        $this->p->setMesa($mesaid);
        $this->p->setCliente($clienteid);
        $this->p->setProduto($produtoid);

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