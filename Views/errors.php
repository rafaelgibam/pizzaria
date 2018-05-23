<?php
$msg = (isset($_GET['msg'])) ? $_GET['msg'] : null ;

if($msg != null){
    switch ($_GET['msg']) {
        case "salvo":
            echo "<div class=\"alert alert-success\" role=\"alert\">
                        Cadastrado com sucesso!
                  </div>";
            break;
        case "erro":
            echo "<div class=\"alert alert-danger\" role=\"alert\">
                        Não conseguimos realizar sua operação, confira se não esqueceu algum campo obrigatório.
                  </div>";
            break;
        case "alterado":
            echo "<div class=\"alert alert-primary\" role=\"alert\">
                        Alterado com sucesso!
            </div>";
    }
}

