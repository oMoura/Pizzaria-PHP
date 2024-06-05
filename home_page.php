
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria-PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
    <style>
        
        .jumbotron {
            background-image: url('https://via.placeholder.com/1500x500');
            background-size: cover;
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        .card-img-top {
            height: 100%;
            object-fit: cover;
        }

        .card {
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>

<?php
require_once "navbar.php";
?>

<div class="jumbotron">
    <div class="container">
        <img src="logo.jpg" alt="">
        <h1 class="display-4">Bem-vindo à Pizzaria-PHP</h1>
        <p class="lead">Venha saborear as melhores pizzas feitas com ingredientes frescos e autênticos.</p>
        <a href="#" class="btn btn-primary btn-lg">Ver Cardápio</a>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="https://www.saboresajinomoto.com.br/uploads/images/recipes/pizza-de-frango-1.jpg" class="btn btn-primary" class="card-img-top" alt="Pizza" width="100%">
                <div class="card-body">
                    <h5 class="card-title">Pizza Frango com catupiry</h5>
                    <p class="card-text">Molho de tomate, queijo mozarela, frango, catupiry, .</p>
                    <a href="#" class="btn btn-primary">Pedir Agora</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://www.minhareceita.com.br/app/uploads/2022/12/pizza-de-pepperoni-caseira-portal-minha-receita.jpg" class="card-img-top" alt="Pizza">
                <div class="card-body">
                    <h5 class="card-title">Pizza Pepperoni</h5>
                    <p class="card-text">Molho de tomate, queijo mozarela, pepperoni picante.</p>
                    <a href="#" class="btn btn-primary">Pedir Agora</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://www.pizzaprime.com.br/wp-content/uploads/2018/12/pizza-quatro-queijos-imagem-destacada.jpg" class="card-img-top" alt="Pizza">
                <div class="card-body">
                    <h5 class="card-title">Pizza 4 queijos</h5>
                    <p class="card-text">Molho de tomate, Mussarela, provolone, gorgonzola e Catupiry.</p>
                    <a href="#" class="btn btn-primary">Pedir Agora</a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
require_once "rodape.php";
