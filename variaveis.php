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

        //string
        $nome = 'André Damazio';

        //int
        $idade = 14;
        $idade = 13;

        //float
        $peso = 85.5;

        //boolean
        $fumante = true;
    ?>

    <h1>Ficha cadastral</h1>
    <br/>
    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumante ?></p>
</body>
</html>