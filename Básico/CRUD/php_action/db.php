<?php

    $server = "";
    $username = "";
    $password = "";
    $dbname = "";

    $connect = mysqli_connect($server, $username, $password, $dbname);
    mysqli_set_charset($connect, "utf8");

    if (mysqli_connect_error()) {
        echo "Erro".mysqli_connect_error();
    }