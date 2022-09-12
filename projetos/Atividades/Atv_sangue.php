<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doação de Sangue</title>
</head>

<body>
    <h1>Análise de doador de Sangue</h1>
    <hr>

    <?php
    $idade = 35;
    $peso = 95;
    
        if ($idade >= 16 && $idade <= 69 && $peso >= 50) {
            echo "<p style='color:Green'> você está apto a doar sangue!</p>";
        } else if ($idade < 16 && $peso >= 50 || $idade > 69 && $peso >= 50) {
            echo "Que pena, você não está apto por conta da idade";
        } else if ($idade >= 16 && $idade <= 69 && $peso<= 50) {
            echo "Que pena, você não está apto por conta do peso";
        }
    
    ?>

   
</body>
</html>