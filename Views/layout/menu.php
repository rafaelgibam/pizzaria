
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">PizzariaCTL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link ml-2" data-toggle="modal" data-target="#exampleModal" >Acesso Funcionário</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Modal LOGIN -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ácesso Funcionário</h5>
            </div>
            <div class="modal-body">
                <form action="/../acesso.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputNumber">CPF</label>
                        <input type="number" name="cpfcnpj" class="form-control" id="exampleInputNumber" aria-describedby="cpfHelp" placeholder="Digite seu CPF/CNPJ">
                        <small id="cpfHelp" class="form-text text-muted">Não divulgue seus dados pessoais!</small>
                        <label class="mr-sm-2" for="inlineFormCustomSelect" >Selecione seu Cargo: </label>
                        <select name="cargo" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                            <option selected hidden >Selecione</option>
                            <option value="1">Cozinheiro</option>
                            <option value="2">Motoboy</option>
                            <option value="3">Garcom</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </form>
            </div>
        </div>
    </div>
</div>

