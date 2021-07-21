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

        //false (true/false) - tipo variável boolean
        //null e empty - valores especiais

        $funcionario1 = null;
        $funcionario2 = '';
        $funcionario3 = false;

        //valores null
        echo '<br/>';
        if(is_null($funcionario1)) {
            echo 'Sim, a variável é null';
        } else {
            echo 'Não, a variável não é null';
        }

        //valores null
        echo '<br/>';
        if(is_null($funcionario2)) {
            echo 'f2 Sim, a variável é null';
        } else {
            echo 'f2 Não, a variável não é null';
        }
        echo '<br/><br/>';

          //valores vazios
          echo '<br/>';
          if(empty($funcionario1)) {
              echo 'f1 Sim, a variável é vazia';
          } else {
              echo 'f1 Não, a variável não é vazia';
          }

        //valores vazios
        echo '<br/>';
        if(is_null($funcionario2)) {
            echo 'f2 Sim, a variável é vazia';
        } else {
            echo 'f2 Não, a variável não é vazia';
        }

        echo '<br/>';
        //valores false null
        echo '<br/>';
        if(is_null($funcionario3)) {
            echo 'f3 Sim, a variável é null';
        } else {
            echo 'f3 Não, a variável não é null';
        }

        echo '<br/>';
        //valores false vazio
        echo '<br/>';
        if(empty($funcionario3)) {
            echo 'f3 Sim, a variável é vazia';
        } else {
            echo 'f3 Não, a variável não é vazia';
        }



    ?>
</body>
</html>