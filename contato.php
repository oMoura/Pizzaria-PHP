<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contato</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
include "navbar.php";
?>

  <div class="container">
    <h1 class="mt-5 mb-4">Entre em Contato</h1>
    <div class="row">
      <div class="col-md-6">
        <form action="#" method="POST">
          <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="mensagem" class="form-label">Mensagem</label>
            <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>
      <div class="col-md-6">
        <h2 class="mb-3">Informações de Contato</h2>
        <p>Entre em contato conosco através dos seguintes meios:</p>
        <ul class="list-unstyled">
          <li><strong>Telefone:</strong> (XX) XXXX-XXXX</li>
          <li><strong>E-mail:</strong> exemplo@email.com</li>
          <li><strong>Endereço:</strong> Rua Exemplo, 1234 - Bairro, Cidade - Estado</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
