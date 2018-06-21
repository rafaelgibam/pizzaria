<?php

require_once __DIR__ . "/../../autoload.php";

$cc = new \Controllers\ClienteController();

echo json_encode($cc->find($_GET['id']));