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

        $lista_coisas = [];
        
        $lista_coisas['frutas'] = array(
           '1'=> 'Maçã',
           '2'=> 'Banana',
           '3'=> 'Pera',
           '4'=> 'Cacau'
        );

        $lista_coisas['pessoas'] = array(
            '1'=>'João',
            '2'=>'José',
            '3'=> 'Maria'
        );

        $lista_coisas['cornos'] = array(
            '1'=>'Ryan',
            '2'=>'Ricardo'
        );

        echo '<pre>';
        print_r($lista_coisas);
        echo '<pre/>';
    ?>
</body>
</html>