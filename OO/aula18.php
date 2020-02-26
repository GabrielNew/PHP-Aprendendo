<?php

class Pessoa {
    private $nome;

    public function __set($nome, $valor) {
        $this->nome = $valor;
    }

    public function __get($nome) {
        return $this->nome;
    }

    public function __toString() {
        return "O Nome desse objeto é: ".$this->nome."<br>";
    }

    public function __invoke() {
        return "Objeto como função";
    }
}

$pessoa = new Pessoa();
$pessoa->nome = "teste";

echo $pessoa->nome."<br>";
echo $pessoa;
echo $pessoa();

/* Caso eu não saiba o nome dos atributos, eu faço isso...

    class Pessoa {
    private $dados = array();

    public function __set($nome, $valor) {
        $this->dados[$nome] = $valor;
    }

    public function __get($nome) {
        return $this->dados[$nome];
    }
}

// Posso tambem incluir mais características ao objeto
$pessoa = new Pessoa();
$pessoa->nome = "teste";
$pessoa->idade = 15;
$pessoa->KI = 8000;

echo $pessoa->nome."<br>";
echo $pessoa->idade."<br>";
echo $pessoa->KI."<br>";
 
*/