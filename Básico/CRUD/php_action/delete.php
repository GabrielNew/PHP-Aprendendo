<?php

    session_start();
    require_once 'db.php';


    if (isset($_POST['btn-deletar'])) {
        $id = mysqli_escape_string($connect, $_POST['id']);

        $sql = "delete from clientes where id = '$id'";

        if (mysqli_query($connect, $sql)) {
            $_SESSION['mensagem'] = "Excluído com Sucesso!";
            header('location: ../index.php');
        } else {
            $_SESSION['mensagem'] = "Ocorreu algum Erro!";
            header('location: ../index.php');
        }
    }
