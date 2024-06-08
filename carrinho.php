<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrinho de Pedidos de Pizza</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    
    .pizza-item {
      border-bottom: 1px solid #dee2e6;
      padding: 10px 0;
    }
    .pizza-item:last-child {
      border-bottom: none;
    }
  </style>
</head>
<body>

<?php
include "navbar.php";
?>

<div class="container mt-5">
  <h1 class="mb-4">Meu carrinho</h1>
  
  
  <div class="row">
    <div class="col-md-6">
      <div class="pizza-item">
        <h3>Pizza de Queijo</h3>
        <p>Massa fina com queijo mozarela</p>
        <button class="btn btn-primary">Adicionar ao Carrinho</button>
      </div>
      <div class="pizza-item">
        <h3>Pizza de Pepperoni</h3>
        <p>Massa fina com pepperoni e queijo mozarela</p>
        <button class="btn btn-primary">Adicionar ao Carrinho</button>
      </div>
      <!-- Adicione mais pizzas conforme necessário -->
    </div>
    
    <!-- Carrinho -->
    <div class="col-md-6">
      <h2>Pizzaria-PHP</h2>
      <ul id="cart" class="list-group">
        <!-- Itens do carrinho serão adicionados aqui -->
      </ul>
      <hr>
      <h4>Total: R$ <span id="total">0.00</span></h4>
      <button class="btn btn-success">Finalizar Pedido</button>
    </div>
  </div>
</div>

<?php
include "rodape.php";
