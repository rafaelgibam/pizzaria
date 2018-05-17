<?php
/**
 * Created by PhpStorm.
 * User: rafaelgibam
 * Date: 17/05/2018
 * Time: 12:33
 */

namespace DAO;

use PDO,PDOException;

class DB
{
    public static function getCon(){
        try{
            $conn = new PDO("mysql:host=localhost;dbname=pizzaria", "root", null);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        }catch (PDOException $e){
            echo "ERRO NA CONEXÃO COM O BANCO DE DADOS - CLASSE DB: {$e->getMessage()}";
        }

        return $conn;
    }
}