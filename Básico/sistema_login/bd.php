<?php

    // Inserir os seus dados aqui
    $server = "";
    $user = "";
    $pass = "";
    $db_name = "";

    $connect = mysqli_connect($server,$user,$pass,$db_name);

    if (mysqli_connect_error()) {
        echo "Ocorreu uma falha <br>";
    } else {
        echo "Conectado <br>";
    }
    