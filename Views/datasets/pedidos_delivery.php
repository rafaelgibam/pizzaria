<?php

require_once __DIR__ . "/../../autoload.php";

$pdc = new \Controllers\PedidoDeliveryController();

echo json_encode($pdc->findAll());