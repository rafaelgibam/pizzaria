<?php include __DIR__ . "/../session.php"; ?>
<?php include __DIR__ . "/../layout/head.php"; ?>
<?php include __DIR__ . "/../layout/menucozinheiro.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-header">
                    <h5>Dashboard</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <canvas id="gcliente" width="1200" height="400"></canvas>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <canvas id="gpedido" width="600" height="400"></canvas>
                        </div>
                        <div class="col-md-6">
                            <canvas id="gpedidopizza" width="600" height="400"></canvas>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>




<script src="/../assets/js/graficos/dashboard.js"></script>

<?php include __DIR__ . "/../layout/footer.php"; ?>