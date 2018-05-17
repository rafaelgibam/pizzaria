<?php
/**
 * Created by PhpStorm.
 * User: rafaelgibam
 * Date: 17/05/2018
 * Time: 10:02
 */

namespace Models;


abstract class PessoaFisica extends Pessoa
{
    public $cpf;
    public $rg;
}