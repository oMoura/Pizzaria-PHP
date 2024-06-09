<?php 
require_once "conexao.php";
$dao =new Dao();
$id_pizza=['id_pizza'];
$dados = $dao->mostrarPizza($id_pizza);

while($linha = $dados->fetch())
{
?>

<style>
  .card-img-top {
    height: 250;
    width: 250;
    border: 1px solid black;
    border-radius: 50px 20px;
    margin-top: 15;
    object-fit: cover;
  }
  .card {
    display: flex;
    justify-content: center;
    align-items: center;
    
    background-color: white;
  }
  </style>

<div class="card">
  <img src="<?php echo $linha['img_link'] ?>" class="card-img-top" alt="...">

  <div class="card-body">
    <h5 class="card-title"><?php echo $linha['sabor']?></h5>
    <p class="card-text"><?php echo $linha['ingredientes']?></p>
    <a href="carrinho.php?id_pizza=<?php echo $linha['id_pizza']?>" class="btn btn-primary">R$ <?php echo $linha['valor']?></a>
  </div>
</div>

<?php
}
?>
