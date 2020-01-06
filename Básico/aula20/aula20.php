<?php

    session_start();
    $_SESSION['cor'] = "verde";
    $_SESSION['moto'] = "Hornet";

    echo $_SESSION['cor']."<br>".$_SESSION['moto']."<br>".session_id();
