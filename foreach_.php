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
    
    //$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    $gregos = array(
        "Sócrates" => "86",
        "Fédon" => "57",
        "Equécrates" => "45",
        "Símias" => "32",
        "Cebes" => "42"
    );

    // $nome recebe o índice
    // $idade recebe o valor salvo no índice
    foreach($gregos as $nome => $idade) {
    echo "$nome = $idade<br/>";
    }
    
    ?>
</body>
</html>