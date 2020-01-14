<?php
    // Trabalhando com Datas

    echo date('d'); // Retorna o dia em número
    echo "<hr>";
    echo date('D'); // Retorna o dia em uma string de 3 dígitos
    echo "<hr>";
    echo date('l'); // Retorna o nome do dia completo
    echo "<hr>";
    echo date('m'); // Retorna o mês em número
    echo "<hr>";
    echo date('M'); // Retorna o mês em string
    echo "<hr>";
    echo date('y'); // Retorna os dois ultimos digitos do ano
    echo "<hr>";
    echo date('Y'); // Retorna o ano 

    /* ------------------------------------------------------------- */
    echo "<hr>";
    date_default_timezone_set('America/Sao_Paulo'); // Definir a hora

    echo date('d/m/Y - H:m:s'); // Podemos misturar as opções listadas
    echo "<hr>";

    $date = date('Y-m-d'); // Guardar no banco o tipo DATE
    $datetime = date('Y-m-d H:i:s'); // Guardar no banco o tipo DATETIME
    /* ------------------------------------------------------------- */
    
    //MKTIME
    $data_pagamento = mktime(15,30,00,01,10,2026);
    echo date('d/m/Y - h:i', $data_pagamento);
    echo "<hr>";
    
    //STRTOTIME
    $data_string = '2020-09-10 14:00:00';
    $data_string = strtotime($data_string);

    echo date('d/m/y', $data_string);
