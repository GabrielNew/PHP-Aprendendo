<?php
    // Funções para Números

    // number_format() => Serve para formatar o número
    $preco = 123789.10;
    $Npreco = number_format($preco, 2, ",",".");
    echo $Npreco."</p>";

    // round() => Arredondar valores
    echo round(8.7)."</p>";

    // ceil() => Arredonda valores sempre para cima
    echo ceil(4.1)."</p>";

    // floor() => Arredonda valores sempre para baixo
    echo floor(7.7)."</p>";

    // rand() => Serve para devolver números aleatórios em um determinado intervalo
    echo rand(0,10)."</p>";