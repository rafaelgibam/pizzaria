<?php

namespace DAO;

interface ICrud
{
    public function insert($obj);
    public function delete($id);
    public function update($id, $obj);
}