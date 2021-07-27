<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>



<?php
    function saudacoes() {
     //GLOBALS -> usar variáveis globais   
     $GLOBALS['saudacao'] = 'Oi';
    }

    saudacoes();
    echo "$saudacao";

    echo '<br/>';

    //echo $_SERVER['PHP_SELF']; // <- para guardar URLS, Headers, caminhos de script
    

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        //coletar o value do campo de formulário
        $name = $_REQUEST['fname'];
        if (empty($name)) {
            echo "Name is empty";
        }else {
            echo $name;
        }
    }

?>
</body>
</html>