<?php if($_SESSION['tipo'] = "cozinheiro"): ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">PizzariaCTL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="/../cozinheiro/" class="nav-link ml-2">Dashboard</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a href="#" class="nav-link ml-2 dropdown-toggle"
                           id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cadastro</a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/../cliente/cli_form.php">Cliente</a>
                            <a class="dropdown-item" href="/../cozinheiro/coz_form.php">Cozinheiro</a>
                            <a class="dropdown-item" href="/../garcom/gar_form.php">Garcom</a>
                            <a class="dropdown-item" href="/../motoboy/mot_form.php">MotoBoy</a>
                            <a class="dropdown-item" href="/../mesa/mesa_form.php">Mesa</a>
                            <a class="dropdown-item" href="/../produto/prod_form.php">Produto</a>
                            <a class="dropdown-item" href="/../endereco/end_form.php">Endereço</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <div class="dropdown">
                        <a href="#" class="nav-link ml-2 dropdown-toggle"
                           id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pesquisa</a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/../cliente/cli_buscar.php">Cliente</a>
                            <a class="dropdown-item" href="/../cozinheiro/coz_buscar.php">Cozinheiro</a>
                            <a class="dropdown-item" href="/../garcom/gar_buscar.php">Garcom</a>
                            <a class="dropdown-item" href="/../motoboy/mot_buscar.php">MotoBoy</a>
                            <a class="dropdown-item" href="/../endereco/end_buscar.php">Endereço</a>
                            <a class="dropdown-item" href="/../produto/prod_buscar.php">Produto</a>
                            <a class="dropdown-item" href="/../mesa/mesa_buscar.php">Mesa</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a href="#" class="nav-link ml-2 dropdown-toggle"
                           id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pedido</a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/../pedido/ped_abrir.php">Abrir Pedido</a>
                            <a class="dropdown-item" href="/../pedido/ped_fechar.php">Fechar Pedido</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a href="#" class="nav-link ml-2 dropdown-toggle"
                           id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Delivery</a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/../delivery/deli_abrir.php">Abrir Pedido</a>
                            <a class="dropdown-item" href="/../delivery/deli_fechar.php">Fechar Pedido</a>
                        </div>
                    </div>
                </li>

            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link ml-2" data-toggle="modal" data-target="#exampleModal" >Perfil</a>
                </li>
                <li class="nav-item">
                    <a href="?action=sair" class="nav-link ml-2">Sair</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php else: header("location: /../"); endif; ?>
