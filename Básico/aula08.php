<?php

    $motos = ['Hornet', 'XJ6', 'Kawasaki Ninja'];
    print_r($motos);
    echo "<br>";

    $totalMotos = count($motos); // Count é uma função para contar o total de elementos de um array
    echo "O total de motos no array: $totalMotos";

    echo "<br>";

    // foreach é para percorrer um array
    foreach($motos as $moto) {
        echo $moto."<br>";
    } 

?>