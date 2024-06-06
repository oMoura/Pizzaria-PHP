<?php
require_once "cabecalho.php";

if($_GET ['error'] != 1){ 
?>

    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Cadastro</h3>
                </div>
                <div class="card-body">
                    <form action="index.php" method="post">
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuario</label>
                            <input type="text" class="form-control" name="usuario" id="nome" placeholder="Digite seu nome de usuário" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="confirmarSenha" placeholder="Digite seu telefone" name="telefone" required>
                        </div>
                        <div class="mb-3">
                            <label for="endereco" class="form-label">Endereço</label>
                            <input type="text" class="form-control" id="confirmarSenha" placeholder="Digite seu endereço" name="endereco" required>
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
                            <input type="password" class="form-control" id="confirmarSenha" placeholder="Confirme sua senha" name="confirmarSenha" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
} else {
?>

    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Cadastro</h3>
                </div>
                <div class="card-body">
                    <form action="index.php" method="post">
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuario</label>
                            <input type="text" class="form-control" name="usuario" id="nome" placeholder="Nome de usuário já existe, digite outro" required>
                        </div>
                        <div class="mb-3">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="confirmarSenha" placeholder="Digite seu telefone" name="telefone" required>
                        </div>
                        <div class="mb-3">
                            <label for="endereco" class="form-label">Endereço</label>
                            <input type="text" class="form-control" id="confirmarSenha" placeholder="Digite seu endereço" name="endereco" required>
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
                            <input type="password" class="form-control" id="confirmarSenha" placeholder="Confirme sua senha" name="confirmarSenha" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
}
?>

<?php
require_once "rodape.php";
 