<?php

// Modificador Public => Todos podem acessar os atributos e métodos

// Modificador Protected => Todos os herdeiros podem acessar os atribuitos e métodos

// Modificador Private => Somente a própria classe pode acessar seus atributos e métodos

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

    private function Velocidade() {
        echo "Velocidade de 100 Km/H"."<br>";
    }

    public function mostrarVelocidade() {
        $this->Velocidade();
    }

    protected function verificarSeguranca() {
        echo "Realizando uma Manutenção em seu veículo!"."<br>";
    }
}

class Moto extends Veiculo { 

    public function colocarCapacete() {
        echo "Colocando Capacete"."<br>";
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function seguranca() {
        $this->verificarSeguranca();
    }
}

class Carro extends Veiculo {

    public function colocarCinto() {
        echo "Colocando Cinto"."<br>";
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

}

$moto1 = new Moto();
$moto1->setModelo("Hornet");
echo $moto1->getModelo();
echo "<br>";
echo $moto1->seguranca();
echo "<br>";
