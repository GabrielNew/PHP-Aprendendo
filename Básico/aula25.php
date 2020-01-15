<?php

    // Manipulação de Arquivo
    $arq = 'aula25.txt';
    //$conteudo = 'teste';
    $tam_arq = filesize($arq);

    $arq_abrir = fopen($arq, 'r');
    if ($arq_abrir) {
        echo "Sucesso"."<br>";
    } else {
        echo "Ocorreu uma Falha!"."<br>";
    }

    while (!feof($arq_abrir)) {
        $linha = fgets($arq_abrir, $tam_arq);
        echo $linha."<br>";
    }
    
    //fwrite($arq_abrir, $conteudo);
    fclose($arq_abrir);