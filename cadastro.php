<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria-PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Cadastro</h3>
                </div>
                <div class="card-body">
                    <form action="index.php" method="$_POST">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="nome" placeholder="Digite seu nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="confirmarSenha" class="form-label">Telefone</label>
                            <input type="password" class="form-control" id="confirmarSenha" placeholder="Digite seu telefone" name="telefone" required>
                        </div>
                        <div class="mb-3">
                            <label for="confirmarSenha" class="form-label">Endereço</label>
                            <input type="password" class="form-control" id="confirmarSenha" placeholder="Digite seu endereço" name="endereco" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Digite seu email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="senha" placeholder="Digite sua senha"  name="senha" required>
                        </div>
                        <div class="mb-3">
                            <label for="confirmarSenha" class="form-label">Confirmar Senha</label>
                            <input type="password" class="form-control" id="confirmarSenha" placeholder="Confirme sua senha" nome="confirmarSenha" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
 