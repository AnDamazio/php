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

        //Retorna o valor de pi
        echo 'Valor de Pi: '.(pi());
        
        echo '<br/>';

        //Retorna o menor valor em uma lista
        echo 'Menor valor: '.(min(1,  150, 300, 2, 4, 5));

        echo '<br/>';

        //Retorna o maior valor em uma lista
        echo 'Maior valor: '.(max(10, 15, 20, 25, 30));

        echo '<br/>';

        //Retorna o valor absoluto de um número
        echo 'Valor absoluto: '.(abs(-5));

        echo '<br/>';

        //Retorna a raiz quadrada de um número
        echo 'Raiz quadrada de um número (64):'.(sqrt(64));
        echo '<br/>';
        echo 'Raiz quadrada de um número (36):'.(sqrt(36));

        //Arredondamento 
        echo '<br/>';
        echo 'Arredondamento de um valor (0.60): '.(round(0.60)); //Retorna 1
        echo '<br/>';
        echo 'Arredondamento de um valor (1.95): '.(round(1.95)); //Retorna 2

        echo '<br/>';

        //Números 
        echo 'Número aleatório entre 0 e 100: '.(rand(0, 100)); //Define-se um número mínimo e um número máximo

        echo('<br/>');

        //Converter um número binário pra um decimal
        echo 'binário para decimal: '.(bindec(1010));

    ?>

</body>
</html>