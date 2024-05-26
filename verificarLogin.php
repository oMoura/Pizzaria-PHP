<?php 

require_once "conexao.php";
$dao = new Dao();
$dao->verificaLogin($_GET['usuario'],$_GET['senha']);