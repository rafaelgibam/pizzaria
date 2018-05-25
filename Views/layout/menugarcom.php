<?php if($_SESSION['tipo'] == "garcom"): ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">PizzariaCTL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="/../garcom/" class="nav-link ml-2">Dashboard</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a href="#" class="nav-link ml-2 dropdown-toggle"
                           id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cadastro</a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/../garcom/cli_form.php">Cliente</a>
                            <a class="dropdown-item" href="/../garcom/end_form.php">Endereço</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a href="#" class="nav-link ml-2 dropdown-toggle"
                           id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pedidos</a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/../pedido/ped_abrir.php">Abrir</a>
                            <a class="dropdown-item" href="/../pedido/ped_fechar.php">Fechar</a>
                            <a class="dropdown-item" href="/../pedido/ped_buscar.php">Buscar</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="/../garcom/delivery.php" class="nav-link ml-2">Delivery</a>
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

<!-- Modal Perfil -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Meu Perfil</h5>
            </div>
            <div class="modal-body">
                Meu Perfil
            </div>
        </div>
    </div>
</div>

<?php else: header("location: /../"); endif; ?>