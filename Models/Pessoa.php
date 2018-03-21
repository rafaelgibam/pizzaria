<?php

namespace Models;

abstract class Pessoa

{
    protected $id;
    protected $cpf;
    protected $nome;
    protected $sexo;
    protected $dtnasc;
    protected $numfixo;
    protected $numcel;
    protected $endereco;
    protected $estado;

    protected function getIdade(){

        $nasc = $this->dtnasc;
        $anoatual =  date('Y');
        $anonasc = explode('/',$nasc);

        return $anoatual - $anonasc[2];
    }


}