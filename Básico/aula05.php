<?php
    $nome = "Goku"; // Escopo Global
    $a = 1;
    $b = 2;
    $c = 3;

   function cumprimentos() {
     global $nome; // Preciso definir a variável como global, caso contrário não irá funcionar
     echo "Oi, meu nome é $nome";
   }

   cumprimentos();

   echo "<hr>";

   function somar() {
     // GLOBALS é um array especial do php, que pega o nome da nossa variável e mostra seu conteúdo  
     echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
   }

   somar();
?>