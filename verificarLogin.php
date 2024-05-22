<?php 

require_once "Dao.php";
$dao = new Dao();
$dao->verificaLogin($_POST['usuario'],$_POST['senha']);