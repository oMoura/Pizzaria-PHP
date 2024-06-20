<?php
include "conexao.php";

$id_pedido = $_GET['id_pedido'];
$dao = new Dao();
$dao->concluirPedido($id_pedido);

header("Location: pedido.php");