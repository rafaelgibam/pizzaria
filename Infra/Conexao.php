<?php

namespace Infra;

use PDO;
use PDOException;

class Conexao
{

    public static function getConnection(){
        try{
            $pdo = new PDO('mysql:host=localhost;dbname=pizzaria', "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            return $pdo;
        }catch (PDOException $e){
            echo "ERROR na Conexão com Banco" . $e->getMessage();
        }

    }


}