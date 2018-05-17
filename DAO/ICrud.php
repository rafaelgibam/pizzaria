<?php


namespace DAO;


interface ICrud
{
    public function insert();
    public function delete($id);
    public function update($id);
}