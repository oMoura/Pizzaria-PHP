<?php
session_start();

if(isset($_GET['id_pizza'])){
    $id_pizza = $_GET['id_pizza'];

    if (!isset($_SESSION['carrinho'])) {
      $_SESSION['carrinho'] = [];
    }

    if (!empty($_SESSION['carrinho'][$id_pizza])) {
      $_SESSION['carrinho'][$id_pizza]['quantidade']++;
    } else {
      $_SESSION['carrinho'][$id_pizza] = $_GET['id_pizza'][$id_pizza];
      $_SESSION['carrinho'][$id_pizza]['quantidade'] = 1;
    }
}

header("Location: carrinho.php");
