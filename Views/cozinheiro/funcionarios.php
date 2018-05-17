<?php require_once __DIR__ . "/../session.php"; ?>
<?php include __DIR__ . "/../layout/head.php"; ?>
<?php include __DIR__ . "/../layout/menucozin.php"; ?>

    <div class="container-fluid">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">CPF</th>
                <th scope="col">NOME</th>
                <th scope="col">SEXO</th>
                <th scope="col">DATA NASCIMENTO</th>
                <th scope="col">NÚMERO FIXO</th>
                <th scope="col">NÚMERO CELULAR</th>
                <th scope="col">ESTADO</th>
                <th scope="col">GOJETA</th>
                <th scope="col">DATA ADMISSÃO</th>
                <th scope="col">SALÁRIO</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <?php
                $con = \Infra\Conexao::getConnection();
                $sql = "SELECT * FROM GARCOM;";
                $stmt = $con->prepare($sql);

                if($stmt->execute()):
                    while ($linha = $stmt->fetch()):
            ?>
            <tr>
                <th scope="row"><?= $linha->CPF ?></th>
                <td><?= $linha->NOME ?></td>
                <td><?= $linha->SEXO = "M" ? "Masculino" : "Feminino" ?></td>
                <td><?= $linha->DATA_NASC ?></td>
                <td><?= $linha->NUM_FIXO ?></td>
                <td><?= $linha->NUM_CELULAR ?></td>
                <td><?= $linha->ESTADO = 1 ? "Ativo" : "Inativo" ?></td>
                <td><?= $linha->GOJETA . "%" ?></td>
                <td><?= $linha->DATA_ADMISSAO ?></td>
                <td><?= "R$" . $linha->SALARIO ?></td>
                <td><a href="?action=editar&&id=<?php $linha->ID ?>">[Editar]</a> | [Apagar]</td>
            </tr>
            <?php endwhile;  endif; ?>
            </tbody>
        </table>
    </div>
<?php include __DIR__ . "/../layout/footer.php"; ?>