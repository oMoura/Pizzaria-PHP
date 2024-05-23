<?php
require_once "User.php";
class Dao {

private $dsn = "mysql:host=localhost;dbname=bank";
private $username = "root";
private$password = "";
private $pdo;

public function __construct(){
    $this->pdo = new PDO($this->dsn, $this->usuario, $this->password);
}

public function insertLogin(User $user){
    $usuario = $user->getusuario();
    //fazer isso com os outros gets na classe User.php

    try {
        $stmt = $this->pdo->query("insert into login values (null,'$usuario','$senha')");
       } catch(PDOException $ex){
           echo "<pre>";
         echo $this->pdo->errorInfo()[2];
       }
}

public function listar(){
    $stmt = $this->pdo->query("SELECT * FROM login");
    return $stmt;
    
}

public function exibirUsuario($id){
    $stmt = $this->pdo->query("select * from login where id=".$id);
    return $stmt;
} 

public function verificaLogin($usuario,$senha){
    $stmt = $this->pdo->query("Select * from login where usuario='$usuario' and senha='$senha'");
    if($stmt->fetch()){
        header("Location: painel.php");
    } else { 
        header("Location: index.php?erro=1");
    }
}
}