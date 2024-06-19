<?php
include "conexao.php";
include "cabecalho.php";
include "navbar.php";
session_start();

if(isset($_SESSION['pedidoCliente'])){

    ?>

<h5>Seu pedido esta sendo preparado...</h5>

<div class="spinner-grow text-primary" role="status">
    <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-grow text-secondary" role="status">
    <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-grow text-success" role="status">
    <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-grow text-danger" role="status">
    <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-grow text-warning" role="status">
    <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-grow text-info" role="status">
    <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-grow text-light" role="status">
    <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-grow text-dark" role="status">
    <span class="visually-hidden">Loading...</span>
</div>

<div class="col-md-6">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Detalhes do Pedido</h5>
        
        <?php
                        $valorTotal = 0;
                    if (isset($_SESSION['pedidoCliente'])) {
                        $pizzas = $_SESSION['pedidoCliente'];
                    $dao = new Dao();
                
                foreach ($pizzas as $id_pizza => $pizza) {
                    foreach ($dao->mostrarPizzaColun($id_pizza) as $linha) {
                        $valorTotal += $linha['valor'];
                    ?>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?php echo $linha['sabor'] ?>
                            <span class="badge bg-primary rounded-pill">R$ <?php echo $linha['valor'] ?></span>
                        </li>
                    </ul>
                
                <?php
                                }
                            }
                        }
                    ?>
                        <h5>Valor total: R$ <?php echo $valorTotal ?></h5>
                        <h5>Endereço:</h5>
                        <span><?php echo $_SESSION['endereco'] ?></span>
                    </div>
                </div>
            </div>
        
        <?php
} else {
?>
    
    <h5>Nenhum pedido realizado.</h5>

<?php
}
include "rodape.php";