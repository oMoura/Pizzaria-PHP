<?php

include "cabecalho.php";
include "login.php";
require_once "Dao.php";
include "rodape.php";


$user = new User();
$user->setUsername($_POST["username"]);
$user->setTelefone($_POST["telefone"]);
$user->setEndereco($_POST["endereco"]);
$user->setEmail($_POST["email"]);

if ($_POST["senha"] == $_POST["confirmarSenha"]){
    $user->setSenha($_POST["senha"]);

} else{
    header("location: /cadastrar.php");
}


$dao = new Dao();
$dao->insertLogin($user);

?>
