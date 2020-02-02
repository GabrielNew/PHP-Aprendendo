<?php

class Login {
    private $email;
    private $senha;

    public function __construct(){
        
    }

    public function Logar() {
        if ($this->email == "trunks@gmail.com" and $this->senha == "123456") {
            echo "Logado";
        } else {
            echo "Dados Inválidos";
        }
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $this-> email = $email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($pass) {
        $this->senha = $pass;
    }
}

$logar = new Login();
$logar->setEmail("trunks@gmail.com");
$logar->setSenha("123456");
$logar->Logar();
echo "<br>";

echo $logar->getEmail();
echo "<br>";
echo $logar->getSenha();
