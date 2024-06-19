<?php
Class Dao
{    
    private $dsn = "mysql:host=192.168.8.10;dbname=grupo05php";
    private $username = "grupophp05";
    private $password = "php05";
    private $pdo;

    public function __construct(){
        $this->pdo = new PDO($this->dsn, $this->username, $this->password);
    }

    public function exibirUsuario($id){
        $stmt = $this->pdo->query("select * from login where id=".$id);
        return $stmt;
    }    

    public function verificaLogin($usuario,$senha){
        $stmt = $this->pdo->query("Select * from login where usuario='$usuario' and senha='$senha'");
        if($stmt->fetch()){
            header("Location: home_page.php");
        } else { 
            header("Location: index.php?erro=1");
        }
    }

    public function insertLogin($usuario, $senha, $telefone, $email, $endereco){
        try {
            $stmt = $this->pdo->query("insert into login( usuario, senha, telefone, email, endereco) values ('$usuario', '$senha', '$telefone', '$email', '$endereco')");
        } catch(PDOException $erroCadastro){
            header("Location: cadastro.php?error=1");
        }
    }

    public function mostrarPizza()
    {
        return $this->pdo->query("select * from pizza");
    }

    public function mostrarPizzaColun($id_pizza)
    {
        return $this->pdo->query("select * from pizza where id_pizza = $id_pizza");
    }
}
