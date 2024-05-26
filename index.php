<?php

include "cabecalho.php";
include "login.php";
include "rodape.php";

    if(isset($_GET['submit'])){

 
        require_once "conexao.php";
 
        $usuario = $_GET['usuario'];
        $senha = $_GET['senha'];
        $telefone = $_GET['telefone'];
        $email = $_GET['email'];
        $endereco = $_GET['endereco'];
 
        $dao = new Dao();
        $dao->insertLogin($usuario, $senha, $telefone, $email, $endereco);
 
    }
