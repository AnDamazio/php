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

        $numero = 1.5;


        //arredonda pra cima
        echo ceil($numero);
        echo '<br />';

        //arredonda pra baixo
        echo floor($numero);

        echo '<br />';
        //arredondamento automático
        echo round($numero);

        echo '<br />';
        
        //número randômico que a máquina suporta
        echo getrandmax();
        echo '<br />';
        //número randômico
        echo rand(10, 20);
        echo '<br />';
        //raiz quadrada
        echo sqrt(25)
    ?>
</body>
</html>