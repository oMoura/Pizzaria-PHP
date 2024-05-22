<?php
Class User {

    private $username;
    private $telefone;
    private $endereco;
    private $email;
    private $senha;
    private $

    public function getUsername(){
        return $this->username;
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


    public function setUsername($username){
        $this->$username = $username;
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
