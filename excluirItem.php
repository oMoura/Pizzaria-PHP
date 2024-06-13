<?php
session_start();

if(isset($_GET['excluir'])){
  $id_pizza = $_GET['excluir'];


  if (!isset($_SESSION['carrinho'][$id_pizza])) {
    $_SESSION['carrinho'][$id_pizza] = [
      'quantidade' => 1
    ];
  } else {
    $_SESSION['carrinho'][$id_pizza]['quantidade']++;
  }
}


//header("Location: carrinho.php");
