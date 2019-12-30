<?php
    /*Funções Importantes para os Arrays*/

    //is_array() => Verifica se uma variável é um array
    $nome = ["Goku", "Vegeta", "Gohan"];

    if (is_array($nome)) {
        echo "É um array";
    } else {
        echo "Não é um array";
    }

    echo "</p>";

    //in_array() => Verifica se um determinado valor esta no array

    if (in_array("Vegeta", $nome)) {
        echo "Esta no array";
    } else {
        echo "Não esta no array";
    }

    echo "</p>";

    //array_keys() => Cria um novo array com as chaves do array passado como parâmetro

    $chaves = array_keys($nome);

    print_r($chaves);
    echo "</p>";

    // array_values() => Retorna um novo array com os valores, do array passado como parâmetro

    $valores = array_values($nome);

    print_r($valores);
    echo "</p>";

    // array_merge() => Serve para unir os valores de dois arrays

    $viloes = ["Cell", "Majin Boo", "Freeza"];
    $herois = ["Goku", "Vegeta", "Trunks"];
    $personagens = array_merge($viloes, $herois);

    print_r($personagens);
    echo "</p>";

    // array_pop() => Remove o último elemento de um array

    echo "Array antes do pop \n";
    print_r($personagens);
    echo "</p>";
    echo "Array depois do pop \n";
    array_pop($personagens);
    print_r($personagens);
    echo "</p>";

    // array_shift => Remove o primeiro elemento de um array

    $viloes2 = ["Garou", "Centopéia", "Boros"];
    print_r($viloes2);
    echo "Removeu o: ".array_shift($viloes2);
    echo "</p>";

    // array_unshift() => Insere um ou mais elementos no inicio do array

    $frutas = ["Uva", "Maçã"];
    array_unshift($frutas, "Laranja", "Manga", "Morango");
    print_r($frutas);
    echo "</p>";

    // array_push() => Insere um ou mais elementos no final do array

    $times = ["Bahia", "Palmeiras", "Flamengo"];
    array_push($times, "São Paulo", "Goiás");
    print_r($times);
    echo "</p>";

    // array_combine() => Serve para mesclar dois arrays, um array de chaves e outro de valores

    $selecoes = ["Alemanha", "Argentina", "Holanda"];
    $lugares = ["Campeão", "Vice", "Terceiro"];
    $status = array_combine($lugares, $selecoes);
    print_r($status);
    echo "</p>";

    // array_sum() => Serve para somar os valores de um array
    
    $numeros = [5,6,7,8,9];
    echo array_sum($numeros);
    echo "</p>";

    // explode() => Transforma uma string em um array

    $data = "29/12/2019";
    $nova_data = explode("/", $data);
    print_r($nova_data);
    echo "</p>";

    // implode() => Transforma um array em uma string
    $motos = ["Hornet", "XJ6", "CB1000"];
    $string = implode(", ", $motos);
    echo "$string";
    echo "</p>";

?>