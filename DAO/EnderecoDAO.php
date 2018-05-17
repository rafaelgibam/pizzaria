<?php

namespace DAO;

class EnderecoDAO extends Model implements ICrud
{
    protected $table = "endereco";

    public function insert()
    {
        $stmt = DB::getCon();
        $stmt->prepare("INSERT INTO {$this->table} ()");
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function update($id)
    {
        // TODO: Implement update() method.
    }
}