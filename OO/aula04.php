<?php

class Veiculo {
    public $modelo;
    public $cor;
    public $ano;

    public function Acelerar() {
        echo "Aumentando Velocidade"."<br>";
    }

    public function Parar() {
        echo "Diminuindo Velocidade"."<br>";
    }
}

class Moto extends Veiculo{ 

    public function colocarCapacete() {
        echo "Colocando Capacete"."<br>";
    }
}

class Carro extends Veiculo{

    public function colocarCinto() {
        echo "Colocando Cinto"."<br>";
    }
}

$moto1 = new Moto();
$moto1->modelo = "Hornet";
$moto1->cor = "Preta";
$moto1->ano = "2022";
$moto1->Acelerar();
$moto1->colocarCapacete();
echo "<br>";
echo var_dump($moto1);
echo "<br>";

$carro1 = new Carro();
$carro1->modelo = "Camaro";
$carro1->cor = "Amarelo";
$carro1->ano = "2022";
$carro1->Parar();
$carro1->colocarCinto();
echo var_dump($carro1);
echo "<br>";