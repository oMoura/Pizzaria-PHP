<?php

session_start();
$_SESSION['pedidoCliente'] = $_SESSION['carrinho'];
unset($_SESSION['carrinho']);

$_SESSION['endereco']=$_POST['rua'];

header("Location: pedido.php");

?>