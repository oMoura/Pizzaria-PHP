<?php
//concluido
include "cabecalho.php";
include "login.php";
include "rodape.php";

    if(isset($_GET['login'])){
        session_start();
        session_destroy();
    }

    if(isset($_POST['submit'])){

 
        require_once "conexao.php";
 
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        $confirmarSeenha = $_POST['confirmarSenha'];

        if ($senha == $confirmarSeenha) {
            $dao = new Dao();
            $dao->insertLogin($usuario, $senha, $telefone, $email, $endereco);
        } else {
            header("Location: cadastro.php?error=2");
            
        }
 
 
    }
