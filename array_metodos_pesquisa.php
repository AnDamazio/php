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
        
        //in_array() -> true or false para a existência do item procurado
        //array_search() -> retorna o índice do valor pesquisado

        $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

        echo '<pre>';
        print_r($lista_frutas);
        echo '<pre/>';

        //retorna true or false
        $existe = in_array('Banana', $lista_frutas);

        if($existe) {
            echo 'Sim, o valor pesquisado existe no array';
        }else {
            echo 'Não, o valor pesquisado não existe no array';
        }

        echo '<br/>';
        //Retorna o index do array
        echo array_search('Uva', $lista_frutas);
    ?>


</body>
</html>