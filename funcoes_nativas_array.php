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
        /*
        $array = ['Notebook'];
        $retorno = is_array($array);

        if($retorno) {
            echo 'Sim, é um array';
        }else {
            echo 'Não, não é um array';
        }*/

        /*
        $array = [1 => 'a', 7 => 'b,', 18 => 'c'];
        echo '<pre>';
            print_r($array);
        echo '</pre';

        $chaves_array = array_keys($array);
        echo '<pre>';
            print_r($chaves_array);
        echo '</pre';

        */

        $array = ['teclado','notebook', 'cabo hdmi', 'gabinete', 'mouse'];
        echo '<pre>';
            //retorna true or false
            //asort <- organiza o array por ordem alfabética, mas mantém os índices iguais
            //count <- retorna a quantidade de elementos de um array
            sort($array);
            print_r($array);
        echo '</pre';

        $array2 = ['casa', 'carro', 'trator', 'ônibus'];
        echo '<pre>';
        $array3 = array_merge($array, $array2);
            print_r($array3);
        echo '</pre>';

        $string = '26/04/2018';
        $array_retorno = explode('/', $string);
        echo '<pre>';
            print_r($array_retorno);
        echo '</pre>';

        $string_retorno2 = implode('/', $array_retorno);
        echo '<pre>';
        echo $string_retorno2;
        echo '</pre>';

    ?>
</body>
</html>