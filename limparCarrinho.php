<?php

session_start();
$_SESSION['pedidoCliente'] = $_SESSION['carrinho'];
unset($_SESSION['carrinho']);

header("Location: pedido.php");

?>