<?php
include "conexao.php";
$dao = new Dao();
$valorTotal = 0;

session_start();
$_SESSION['pedidoCliente'] = $_SESSION['carrinho'];
unset($_SESSION['carrinho']);

$_SESSION['endereco']=$_POST['rua'];

$pizzas = $_SESSION['pedidoCliente'];
$_SESSION['descricao'] = [];

foreach ($pizzas as $id_pizza => $pizza) {
    foreach ($dao->mostrarPizzaColun($id_pizza) as $linha) {
        $valorTotal += $linha['valor'];
        $_SESSION['descricao'][] = $linha['sabor'];

    }
}
$descricao = implode(", ", $_SESSION['descricao']);
$usuario = $_SESSION["usuario"];
$rua = $_SESSION['endereco'];

$dao->insertPedido($usuario,$descricao,$valorTotal,$rua);

header("Location: pedido.php");

?>
