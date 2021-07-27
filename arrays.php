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

        //Arrays indexados
        $personagens = array("Gon", "Killua", "Leorio", "Kurapika");

        echo '<pre>';
        print_r($personagens);
        echo '</pre>';

        //Conta a quantidade de itens em um array
        echo count($personagens);

        //Arrays associativos / Arrays dentro de arrays
        $listaCoisas = array(
        'pessoas' => ['Paulo', 'João', 'Cleber'],
        'personagens' => [ 'Hunter x Hunter' => ['Killua', 'Gon', 'Leorio', 'Kurapika'],
        'Naruto' => ['Sasuke', 'Naruto', 'Itachi']]);
         
        $listaCompras = array(
        ['Frutas' => 'Maçã, Pera, Abacate'],
        ['Limpeza' => 'Soda, Limpol']);
        
        echo '<pre>';
        print_r($listaCoisas);
        echo '</pre>';

        echo '<pre>';
        print_r($listaCompras);
        echo '</pre>';

        //Fundir arrays
        $fusao = array_merge_recursive($listaCoisas, $listaCompras);
        echo '<pre>';
        print_r($fusao);
        echo '</pre>';
        
        //Retorna um key aleatória do array
        echo array_rand($listaCoisas)
    ?>

</body>
</html>