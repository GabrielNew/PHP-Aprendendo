<?php
    // Arrays Associativos 
    $pessoa = array("nome"=> "Vegeta", "idade"=>48,"altura"=>1.65);

    echo $pessoa["nome"];

    echo "</p>";

    // Laço foreach para pecorrer um array
    $jogadores = [1 => "Cristiano Ronaldo", 2 =>"Messi", 3 => "Neymar"];

    foreach ($jogadores as $indice => $jogador){
        echo $indice." -> "."$jogador<br>";
    }

    echo "</p>";

    // Arrays Multidimensionais
    $times = array("cariocas"=>array("Botafogo", "Vasco", "Flamengo"),
                   "paulistas"=>array("Corinthians", "Santos", "Palmeiras"));

    // Laço foreach para percorrer um array multidimensional
    foreach($times["cariocas"] as $indice => $valor) {
        echo $indice.":".$valor."<br>";
    }

    echo "</p>";

    foreach($times["paulistas"] as $indice => $valor) {
        echo $indice.":".$valor."<br>";
    }
?>