<?php
session_start();

if(isset($_GET['excluir'])){
  $id_pizza = $_GET['excluir'];
  unset($_SESSION['carrinho'][$id_pizza]);
  }

header("Location: carrinho.php");
