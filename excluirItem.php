<?php
session_start();

if(isset($_GET['excluir'])){
  $id_pizza = $_GET['excluir'];

  if (isset($_SESSION['carrinho'])) {
    if (isset($_SESSION['carrinho'][$id_pizza])) {
      // $_SESSION['carrinho'][$id_pizza] = [
      //   'quantidade' => 0
      // ];
    //} else {
      $_SESSION['carrinho'][$id_pizza] = [];
      $_SESSION['carrinho'][$id_pizza]['quantidade']--;
    //}
  }
}
}
echo "<pre>";
echo var_dump($_SESSION['carrinho']);
echo "</pre>";

//header("Location: carrinho.php");
