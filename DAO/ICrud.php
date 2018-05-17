<?php

namespace DAO;

interface ICrud
{
    public function insert($obj);
    public function update($obj);
}