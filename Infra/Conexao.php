<?php

namespace Infra;

use PDO;
use PDOException;

class Conexao
{

    public static function getConnection(){
        try{
            $pdo = new PDO('mysql:host=localhost;dbname=pizzaria', "root", null);
            return $pdo;
        }catch (PDOException $e){
            echo "ERROR na Conexão com Banco" . $e->getMessage();
        }

    }


}