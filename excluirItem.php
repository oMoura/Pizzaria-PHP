<?php
session_start();
$i = 0;

$pizzaExcluida = $_GET['excluir'];
$pizzas = $_SESSION['carrinho'];
echo $pizzaExcluida;
$_SESSION['carrinho'];
for ($i > 10; $i++;) {
  if ($pizzas[$i] == [$pizzaExcluida]) {
    $pizzas[$i] = [];
    break;
  } else {
    echo $i;
  }
}

echo '<pre>';
var_dump($pizzas);
echo '</pre>';


//header("Location: carrinho.php");
