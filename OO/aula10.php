<?php

class Animal {

    public function Andar() {
        echo "Animal Andando...";
    }
}

class Cachorro extends Animal {
    // Polimorfismo é quando mudamos o comportamento de uma função da classe pai, na classe filha
    public function Andar() {
        echo "Cachorro Andando...";
    }
}


$a1 = new Animal();
$a1->Andar();
echo "<br>";
$c1 = new Cachorro();
$c1->Andar();