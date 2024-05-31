<?php 

require_once "conexao.php";
$dao = new Dao();
$dao->verificaLogin($_POST['usuario'],$_POST['senha']);
