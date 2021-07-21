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

        $texto = 'Curso completo de PHP';

        //string to lower
        echo $texto .'<br />';
        echo strtolower($texto .'<br/>');

        //string do up
        echo strtoupper($texto. '<br/>');
        
        //upper case first
        echo ucfirst($texto. '<br/>');

        //lower case first
        echo lcfirst($texto. '<br/>');

         //upper length
         echo strlen($texto);
         echo '<br/>';

         //string replace
        echo str_replace('Curso', 'Anime', $texto);
        echo '<br />';

        //Recortar uma parte da string
        echo substr($texto, 6, 8)
    ?>
</body>
</html>