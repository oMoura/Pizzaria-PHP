<?php
require_once "conexao.php"; 
$id_pizza=['id_pizza'];
$dao = new Dao();
$dados = $dao->mostrarPizza($id_pizza);
$linha = $dados->fetch();


?>
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Pizzas</h5>
    <p class="card-text">
      Sabor:<?php echo $linha["sabor"];?><br>
      Ingredientes: <?php echo $linha["ingredientes"];?><br>
      Preço: <?php echo $linha["valor"];?><br>
    </p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
