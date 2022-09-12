<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $x = "33"; // x é uma variável do tipo "string"
    $y = 34;
    $fumante = false;

    if ($x === $y) {
        echo "X é igual a Y!";
    } else {
        echo "X é diferente de Y!";
    }

    $x = 12;
    $y = true;

    echo "<br>";

    if ($fumante) {
        echo "É fumante ...";
    } else {
        echo "Não fuma...";
    }


    ?>
</body>

</html>