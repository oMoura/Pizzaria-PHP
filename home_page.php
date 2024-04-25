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
            height: 200px;
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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Pizzaria-PHP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cardápio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contato</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
    <div class="container">
        <h1 class="display-4">Bem-vindo à Pizzaria-PHP</h1>
        <p class="lead">Venha saborear as melhores pizzas feitas com ingredientes frescos e autênticos.</p>
        <a href="#" class="btn btn-primary btn-lg">Ver Cardápio</a>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Pizza">
                <div class="card-body">
                    <h5 class="card-title">Pizza frango</h5>
                    <p class="card-text">Molho de tomate, queijo mozarela, manjericão fresco.</p>
                    <a href="#" class="btn btn-primary">Pedir Agora</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Pizza">
                <div class="card-body">
                    <h5 class="card-title">Pizza Pepperoni</h5>
                    <p class="card-text">Molho de tomate, queijo mozarela, pepperoni picante.</p>
                    <a href="#" class="btn btn-primary">Pedir Agora</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Pizza">
                <div class="card-body">
                    <h5 class="card-title">Pizza Vegetariana</h5>
                    <p class="card-text">Molho de tomate, queijo mozarela, pimentão, cogumelos, cebola, azeitonas.</p>
                    <a href="#" class="btn btn-primary">Pedir Agora</a>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="bg-dark text-light text-center py-3 mt-5">
  <p>&copy; 2024 Pizzaria Delícia. Todos os direitos reservados.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
