<?php

namespace Models;

abstract class Pessoa

{
    protected  $cpf;
    protected $nome;
    protected $sobrenome;
    protected $datanasc;
    protected $sexo;
    protected $nascionalidade;
    protected $endereco;
    protected $altura;
    protected $peso;
    protected $email;
    protected $numcelular;
    protected $numfixo;
    protected $numrecado;
    protected $status;

    protected function getIdade(){

        $nasc = $this->datanasc;
        $anoatual =  date('Y');
        $anonasc = explode('/',$nasc);

        return $anoatual - $anonasc[2];
    }


}