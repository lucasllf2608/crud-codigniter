<?php 

class Contato{

    private $id;
    private $nome;
    private $email;
    private $telefone;

    function getId(){
        return $this->id;
    }

    function setId($id){
        $this->id = $id;
    }

    function getNome(){
        return $this->nome;
    }

    function setNome($nome){
        $this->nome = $nome;
    }

    function getEmail(){
        return $this->email;
    }

    function setEmail($email){        
        $this->email = $email;
    }   

    function getTelefone(){
        return $this->telefone;
    }

    function setTelefone($telefone){
        $this->telefone = $telefone;
    }

}



?>