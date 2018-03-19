<?php

namespace Models;

class Endereco
{
    private $nomerua;
    private $numcasa;
    private $bairro;
    private $cidade;
    private $estado;
    private $complemento;
    private $referencia;
    private $cep;
    private $pais;

    /**
     * @return mixed
     */
    public function getNomeRua()
    {
        return $this->nomerua;
    }

    /**
     * @param mixed $nomerua
     */
    public function setNomerua($nomerua)
    {
        $this->nomerua = $nomerua;
    }

    /**
     * @return mixed
     */
    public function getNumcasa()
    {
        return $this->numcasa;
    }

    /**
     * @param mixed $numcasa
     */
    public function setNumcasa($numcasa)
    {
        $this->numcasa = $numcasa;
    }

    /**
     * @return mixed
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @param mixed $bairro
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param mixed $cidade
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    /**
     * @return mixed
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * @param mixed $complemento
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    }

    /**
     * @return mixed
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * @param mixed $referencia
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;
    }

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param mixed $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    /**
     * @return mixed
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * @param mixed $pais
     */
    public function setPais($pais)
    {
        $this->pais = $pais;
    }


}