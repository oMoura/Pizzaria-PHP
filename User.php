<?php
Class User {

    private $usuario;
    private $telefone;
    private $endereco;
    private $email;
    private $senha;

    public function getUsuario(){
        return $this->usuario;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getSenha(){
        return $this->senha;
    }


    public function setUsuario($usuario){
        $this->$usuario = $usuario;
    }
    public function setTelefone($telefone){
        $this->$telefone = $telefone;
    }
    public function setEndereco($endereco){
        $this->$endereco = $endereco;
    }
    public function setEmail($email){
        $this->$email = $email;
    }
    public function setSenha($senha){
        $this->$senha = $senha;
    }
}
