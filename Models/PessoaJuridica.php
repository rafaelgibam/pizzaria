<?php


namespace Models;


abstract class PessoaJuridica extends Funcionario
{
    protected $cnpj;
    protected $razaosocial;
}