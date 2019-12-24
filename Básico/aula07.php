<?php

    $personagens = array("Goku","Gohan","Vegeta","Trunks","Majin Boo"); // Definir um Array
    print_r($personagens); // print_r é uma função especial para mostrar um array
    echo "<br>";
    echo $personagens[2]; // Definir uma posição em específico
    echo "<br>";

    $personagens[] = "Cell"; // Inserir um elemento no array
    print_r($personagens);

    echo "<br>";

    // Outra forma de definir um array

    $motos = ['Hornet', 'XJ6', 'Kawasaki Ninja'];
    print_r($motos);

?>