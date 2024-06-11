<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrinho de Pedidos de Pizza</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
session_start();
include "navbar.php";
include "conexao.php";
?>

<div class="container mt-5">
  <h1 class="mb-4">Meu carrinho</h1>
  
  <?php
    if(isset($_GET['id_pizza'])){
      $id_pizza = $_GET['id_pizza'];

      if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = [];
      }

      if (isset($_SESSION['carrinho'][$id_pizza])) {
        $_SESSION['carrinho'][$id_pizza] = [];
      }

      if (empty($_SESSION['carrinho'][$id_pizza])) {
        $_SESSION['carrinho'][$id_pizza]['quantidade'] = 1;
      } else {
        $_SESSION['carrinho'][$id_pizza] = $id_pizza;
        $_SESSION['carrinho'][$id_pizza]['quantidade']++;
        
      }
        
      $dao =new Dao();
      $dados = $dao->mostrarPizzaColun($id_pizza);
      while($linha = $dados->fetch()){
      ?>
  
<div class="card">
  <div class="card-body">
    <h5 class="card-title"><?php echo $linha['sabor']?></h5>
  <p class="card-text"><?php echo $linha['ingredientes']?></p>
<a class="btn btn-primary">R$ <?php echo $linha['valor']?></a>
</div>
</div>

<?php 
          }
    }
  ?>
    
    <div class="col-md-6">
      <h2>Pizzaria-PHP</h2>
      <ul id="cart" class="list-group">
      </ul>
      <hr>
      <h4>Total: R$ <span id="total">0.00</span></h4>
      <a href="final.php" class="btn btn-success">Finalizar Pedido</a>
    </div>
  </div>
</div>

<?php
include "rodape.php";
