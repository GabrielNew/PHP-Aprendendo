<!DOCTYPE html>
<html>
<head>
    <title>Upload de Arquivos</title>
</head>
<body>
    <?php
        if (isset($_POST["enviar_arq"])) {
            $formatos = ["png", "jpeg", "jpg", "gif"];
            $qtdArqs = count($_FILES['arquivo']['name']);
            $contador = 0;
            while ($contador < $qtdArqs) {
                $ext = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);
            
                if (in_array($ext, $formatos)) {
                    $pasta = "Básico/arquivos/";
                    $temp = $_FILES['arquivo']['tmp_name'][$contador];
                    $novoNome = uniqid().".$ext";

                    if (move_uploaded_file($temp,$pasta.$novoNome)) {
                        echo "Arquivo Enviado para a $pasta.$novoNome";
                    } else {
                        echo "Arquivo Enviado para a $pasta.$novoNome";
                    }
                } else {
                    echo "Inválido";
                }
                $contador++;
            }
        }
            
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
        <input type="file" name="arquivo[]" multiple><br>
        <button type="submit" name="enviar_arq">Enviar</button>
    </form>
</body>
</html>