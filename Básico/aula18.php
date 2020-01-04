<?php
    /* Filtros de Sanitização, servem para "limpar" as variáveis do nosso programa,
       ou seja, remove certos caracteres que não são permitidos em alguns tipos de dados 
    */
    if (isset($_POST['enviar_dados'])) {
        $erros = array(); // Array para guardar os erros

        $nome = filter_input(INPUT_POST, "v_nome",FILTER_SANITIZE_SPECIAL_CHARS);
        echo "$nome <br>";
        
        $idade = filter_input(INPUT_POST, "v_idade",FILTER_SANITIZE_NUMBER_INT);
        echo "$idade <br>";

        $email = filter_input(INPUT_POST, "v_email", FILTER_SANITIZE_EMAIL);
        echo "$email <br>";

        $url = filter_input(INPUT_POST, "v_url", FILTER_SANITIZE_URL);
        echo "$url <br>";

    }

?>

    <html>
        <body>
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <label>Nome</label>
                <input type="text" name="v_nome"><br>
                <label>Idade</label>
                <input type="text" name="v_idade"><br>
                <label>Email</label>
                <input type="text" name="v_email"><br>
                <label>URL</label>
                <input type="text" name="v_url"><br>
                <button type="submit" name="enviar_dados">Enviar</button>
          </form>  
        </body>
    </html>