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

        //referência: https://www.php.net/manual/en/datetime.format.php
    
        //recuperação da data atual / data corrente

        //D = dia str
        //d = dia number
        echo date('d/m/Y H:i:s');
        echo '<br/>';
        //Formato de data
        echo date_default_timezone_get();
        echo '<br/>';
        date_default_timezone_set('America/Sao_Paulo');
        echo '<br/>';
        echo date('d/m/Y H:i:s');

        $data_inicial = '2018-04-24';
        $data_final =  '2018-05-15';

        echo('<br />');

        //timestamp

        $time_inicial = strtotime($data_inicial);
        $time_final = strtotime($data_final);
        echo $data_inicial. ' - '. $time_inicial;
        echo('<br />');
        echo $data_final. ' - '. $time_final;
        $diferenca_times = $time_final - $time_inicial;
        echo('<br />');

        echo $diferenca_times / 86400
        
    ?>
</body>
</html>