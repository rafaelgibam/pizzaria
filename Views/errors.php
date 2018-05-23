<?php
$msg = (isset($_GET['msg'])) ? $_GET['msg'] : null ;

if($msg != null){
    switch ($_GET['msg']) {
        case "ok":
            echo "<div class=\"alert alert-success\" role=\"alert\">
                        Operação realizada com sucesso!
                  </div>";
        case "erro":
            echo "<div class=\"alert alert-primary\" role=\"alert\">
                        Não conseguimos realizar sua operação, confirar se não esqueceu algo.
                  </div>";
    }
}

