<form action="verificarLogin.php" method="$_GET">
<div class="mx-auto p-2" style="width: 200px;">
<p class="fs-1">Bem vindo</p>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Usuario</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="usuario">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Senha</label>
    <input type="password" class="form-control" id="senha" name="senha">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Lembrar meu login</label>
  </div>
  <button type="submit" name="Entrar" id="buttons" class="btn btn-primary">Entrar</button>
  <a href="cadastro.php" id="buttons" class="btn btn-primary">Cadastrar</a>
    </div>
</form>
