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
  include "navbar.php";
  require_once "conexao.php";
  ?>

  <div class="container mt-5">
    <h1 class="mb-4">Meu carrinho</h1>

    <?php
    session_start();
    $valorTotal = 0;
    if (isset($_SESSION['carrinho'])) {
      $pizzas = $_SESSION['carrinho'];
      $dao = new Dao();

      foreach ($pizzas as $id_pizza => $pizza) {

        // echo '<pre>';
        // var_dump($pizza);
        // echo '</pre>';
        foreach ($dao->mostrarPizzaColun($id_pizza) as $linha) {
          $valorTotal += $linha['valor'];
    ?>
          <div class="card my-2">
            <div class="card-body">
              <h5 class="card-title"><?php echo $linha['sabor'] ?></h5>
              <p class="card-text"><?php echo $linha['ingredientes'] ?></p>
              <p class="card-text">R$ <?php echo $linha['valor'] ?></p>
              <a href="excluirItem.php?excluir=<?php echo $linha['id_pizza'] ?>" class="btn btn-primary"> Excluir </a>
            </div>
          </div>
    <?php
        }
      }
    }
    ?>

    <div class="col-md-6">
      <h2>Pizzaria-PHP</h2>
      <ul id="cart" class="list-group"></ul>
      <hr>

      <h4>
        Total: R$ <span id="total"><?php echo $valorTotal ?></span>
      </h4>
      <a href="final.php" class="btn btn-success">Finalizar Pedido</a>
    </div>
  </div>
  </div>

  <?php
  include "rodape.php";
