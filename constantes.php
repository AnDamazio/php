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
        //Declaração de constante -> define(name, value)
        define("telefone", 40028922);
        echo telefone;

        echo '<br/>';

        //Array constante
        define("gregos", [
            "Sócrates",
            "Fédon",
            "Equécrates",
            "Símias",
            "Cebes"
        ]);

        echo gregos[0], ", ". gregos[1], ", ". gregos[2], ", ". gregos[3], ", ". gregos[4];

        function exibirGregos() {
            echo '<pre>'; // <- formata a exibição de um array
            print_r(gregos); // Método para imprimir um array
            echo '</pre>'; // <- formata a exibição de um array
        }

        exibirGregos();
        

    ?>
</body>
</html>