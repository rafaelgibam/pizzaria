<?php

    $gc = new \Controllers\GarcomController();
    $mc = new \Controllers\MotoBoyController();
    $_POST['cozinheiro'];

    switch ($funcao){
        case 1:
            $gc->insert();
            header("refresh: 3 cozinheiro/fun_form.php?msg=ok");
        case 2:
            $mc->insert();
            header("refresh: 3 cozinheiro/fun_form.php?msg=ok");
    }
?>
