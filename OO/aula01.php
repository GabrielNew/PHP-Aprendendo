<?php

class Pessoa {
    public $nome;
    public $idade;

    public function Saudar() {
        echo "Olá";
    }

    public function Apresentar() {
        echo "Olá, meu nome é ".$this->nome." e eu tenho ".$this->idade." anos de idade!";
    }
}

$p1 = new Pessoa(); 
//$p1->Saudar();
$p1->nome = "Goku";
$p1->idade = 26;
$p1->Apresentar();
echo "<br>";