<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $linha = "Lorem Ipsum Dolor Sit Amet";

        //Retorna o comprimento de uma string
        echo strlen($linha);

        echo '<br/>';

        //Conta a quantidade de palavras em uma string
        echo str_word_count($linha);

        echo '<br/>';

        //Inverte uma string
        echo strrev($linha);

        echo '<br/>';

        //Retorna a primeira posição de uma palavra em uma string. 
        //Se não tiver, retorna FALSE
        echo strpos($linha, "Sit");

        echo '<br/>';

        //substitui uma parte de uma string
        echo str_replace("Lorem", "Dorme", $linha);

    ?>
</body>
</html>
