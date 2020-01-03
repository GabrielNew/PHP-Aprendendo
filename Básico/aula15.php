<?php
    // Trabalhando com Funções

    function msgBoasVindas($nome) { // Declarando uma função
        echo "Olá $nome, Seja bem Vindo(a)!"."</p>";
    }

    function calcularMedia($nome, $notas) {
        $media = array_sum($notas)/count($notas);
        $media = number_format($media, 2);

        if ($media >= 6.0) {
            echo "$nome foi aprovado com a media -> $media <br>";
        } else {
            echo "$nome foi reprovado com a media -> $media <br>";
        }
    }

    
    msgBoasVindas("Hulk"); // Chamando uma função

    $notas = [10,10,8];
    calcularMedia("Gabriel", $notas);