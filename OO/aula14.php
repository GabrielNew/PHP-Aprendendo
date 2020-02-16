<?php
// Exception -> Serve para Sinalizar possíveis problemas, na execução de um programa qualquer.

class Noticias {

    public function cadastrarEmail($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // Se o email não for válido, lançamos uma exceção 
            throw new Exception("Email Inválido", 1);
        } else {
            echo "Email Válido"."<br>";
        }
    }

}

$news = new Noticias();

// Precisamos fazer um Try/Catch para tratar o erro que lançamos na Exception
try {
    $news->cadastrarEmail("teste");
} catch (Exception $th) {
    echo "Mensagem: ".$th->getMessage()."<br>";
    echo "Código: ".$th->getCode()."<br>";
    echo "Linha: ".$th->getLine()."<br>";
    echo "Arquivo: ".$th->getFile()."<br>";
}
