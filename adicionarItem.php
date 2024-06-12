<?php
session_start();

if(isset($_GET['id_pizza'])){
  $id_pizza = $_GET['id_pizza'];

  if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
  }

  // se não existir o carrinho: criamos um; caso exista, adicionamos um
  if (!isset($_SESSION['carrinho'][$id_pizza])) {
    $_SESSION['carrinho'][$id_pizza] = [
      'quantidade' => 1
    ];
  } else {
    $_SESSION['carrinho'][$id_pizza]['quantidade']++;
  }
}

header("Location: carrinho.php");
