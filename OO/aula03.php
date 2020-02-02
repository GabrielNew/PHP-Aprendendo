<?php

class Login {
    private $email;
    private $senha;
    private $nome;

    public function __construct($email, $senha, $nome) {
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->setNome($nome);
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

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

}

$logar = new Login("trunks@gmail.com", "123456", "Trunks da Silva");
$logar->Logar();
echo "<br>";

echo $logar->getEmail();
echo "<br>";
echo $logar->getSenha();
echo "<br>";
echo $logar->getNome();
