<?php

include "cabecalho.php";
include "login.php";
include "rodape.php";

    if(isset($_POST['submit'])){

 
        require_once "conexao.php";
 
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
 
        $dao = new Dao();
        $dao->insertLogin($usuario, $senha, $telefone, $email, $endereco);
 
    }
