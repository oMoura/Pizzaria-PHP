<?php
include "conexao.php";
include "cabecalho.php";
include "navbar.php";

session_start();
$dao = new Dao();
$usuario = $_SESSION["usuario"];

if($_SESSION["usuario"] != "admin"){
    if(isset($_SESSION['pedidoCliente'])){
?>

<style>
    .endereco{
        padding-bottom: 25px;
    }
</style>

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

            <?php
            foreach ($dao->mostrarPedidos($usuario) as $linha) {
                ?>

<h5 class="card-title">Detalhes do Pedido</h5>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo $linha['descricao'] ?>
                    <span class="badge bg-primary rounded-pill">R$ <?php echo $linha['valor_total'] ?></span>
                </li>
            </ul>
            <h5 class="endereco">Endereço: <?php echo $linha['rua']?></h5>  

            <?php 
            }
            ?>
                        
        </div>
    </div>
</div>

<?php
} else {
?>
    <h5>Nenhum pedido realizado.</h5>
<?php
}
//pagina de admin-----------------------------------------------
}else{
?>

    <style>
    .card-title{
        padding-top: 30px;
    }
</style>

<h5>Pedidos</h5>

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

            <?php
            foreach ($dao->mostrarPedidosAdmin() as $linha) {
                ?>

<h5 class="card-title">Detalhes do Pedido</h5>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo $linha['descricao'] ?>
                    <span class="badge bg-primary rounded-pill">R$ <?php echo $linha['valor_total'] ?></span>
                </li>
            </ul>
            <h5 class="endereco">Endereço: <?php echo $linha['rua']?></h5>
            <a href="concluirPedido.php?id_pedido=<?php echo $linha['id_pedido'] ?>">Pedido entregue</a> 

            <?php 
            }
            ?>
                        
        </div>
    </div>
</div>
<?php
}

