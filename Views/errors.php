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
            echo "<div class=\"alert alert-warning\" role=\"alert\">
                        Alterado com sucesso!
            </div>";
            break;
        case "deletado":
            echo "<div class=\"alert alert-primary\" role=\"alert\">
                        Deletado com Sucesso!
            </div>";
            break;

        case "fechado":
            echo "<div class=\"alert alert-info\" role=\"alert\">
                        Pedido fechado com Sucesso!
            </div>";
            break;

        case "aberto":
            echo "<div class=\"alert alert-success\" role=\"alert\">
                        Pedido Aberto com Sucesso!
            </div>";
            break;

        case "pf":
            echo "<div class=\"alert alert-success\" role=\"alert\">
                        O Pedido já está fechado!
            </div>";
            break;
    }
}

