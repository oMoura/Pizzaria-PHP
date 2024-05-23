<?php

include "cabecalho.php";
include "login.php";
require_once "conexao.php";
include "rodape.php";


$user = new User();
$user->setUsuario($_POST["usuario"]);
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
