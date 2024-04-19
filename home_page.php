<?php
require_once "cabecalho.php";
?>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Pizzaria PHP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cardápio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contato</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="jumbotron text-center">
    <h1>Bem-vindo à Pizzaria!</h1>
    <p>As melhores pizzas da região</p>
    <a href="#" class="btn btn-primary btn-lg">Faça seu pedido</a>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h2>Pizzas</h2>
        <p>Conheça a variedade de sabores que temos para oferecer.</p>
        <a href="#" class="btn btn-secondary">Ver Cardápio</a>
      </div>
      <div class="col-md-4">
        <h2>Localização</h2>
        <p>Estamos localizados em Diadema. Venha nos visitar!</p>
        <a href="#" class="btn btn-secondary">Ver Mapa</a>
      </div>
      <div class="col-md-4">
        <h2>Contato</h2>
        <p>Entre em contato conosco para fazer uma reserva ou tirar dúvidas.</p>
        <a href="#" class="btn btn-secondary">Fale Conosco</a>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
