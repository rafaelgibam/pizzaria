<?php

require_once __DIR__ . "/../../autoload.php";

$ppc = new \Controllers\PedidoPresencialController();

echo json_encode($ppc->findAll());