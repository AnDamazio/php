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
    
        //Arrays sequenciais
        //$lista_frutas = ['Banana','Maçã','Morango','Uva', 'Abacate'];
        $lista_frutas = array('Banana','Maçã','Morango','Uva', 'Abacate');

        $lista_frutas[] = 'Abacaxi';

        echo '<pre/>';
        var_dump($lista_frutas);
        
        echo '<pre/>';
        print_r($lista_frutas);

        echo '<hr/>';
        echo $lista_frutas[2];

        //associativos

        $arrayName = array(
            'a' => 'Banana',
            'b' => 'Maçã',
            'c' => 'Abacate' );

            /*
              $arrayName = [
            'a' => 'Banana',
            'b' => 'Maçã',
            'c' => 'Abacate' ];
             */

            echo '<pre/>';
            print_r($arrayName);

        $arrayName['d'] = 'Abacaxi';
        echo '<pre/>';
        print_r($arrayName);
    ?>
</body>
</html>