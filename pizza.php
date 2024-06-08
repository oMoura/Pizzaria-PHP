<?php 
require_once "conexao.php";
$dao =new Dao();
$dados = $dao->mostrarPizza();
?>



<?php
while($linha = $dados->fetch())
{
?>

<style>
  .card-img-top {
    height: 30%;
    width: 30%;
    object-fit: cover;
  }
  .card {
    transition: transform 0.3s;
  }
  </style>

<div class="card">
  <img src="<?php echo $linha['img_link'] ?>" class="card-img-top" alt="...">

  <div class="card-body">
    <h5 class="card-title"><?php echo $linha['sabor']?></h5>
    <p class="card-text"><?php echo $linha['ingredientes']?></p>
    <a href="#" class="btn btn-primary">R$ <?php echo $linha['valor']?></a>
  </div>
</div>

<?php
}
?>
