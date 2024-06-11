<?php 

require_once "conexao.php";
$dao = new Dao();
$dao->verificaLogin($_POST['usuario'],$_POST['senha']);
session_start();
$_SESSION["usuario"] = $_POST['usuario'];
