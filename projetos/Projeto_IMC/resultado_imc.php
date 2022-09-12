<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC - Resultados</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];
        $valor_imc = calcularIMC($peso, $altura);

        function calcularIMC($peso, $altura){
            $imc = $peso / ($altura * $altura);
            return $imc;

        }

        function classificaIMC($imc) {
            if ($imc >= 40){
                echo "<p style='color:Red'> Obesidade grau III</p>";
            }
            if ($imc >=35 && $imc <=39.9)
                echo "<p style='color:Red'> Obesidade grau II</p>";
           
                if ($imc >=30 && $imc <=35)
                echo "<p style='color:Red'> Obesidade grau I</p>";

            if ($imc >= 25 && $imc <=30)
                echo "<p style='color:Red'> Pré-Obeso</p>";

            if ($imc >= 18.5 && $imc <= 25)
                echo "<p style='color:Green'> Adequado</p>";

            if ($imc >= 17 && $imc <= 18.4)
                echo "<p style='color:Yellow'> Magreza grau I</p>";

            if ($imc > 16 && $imc < 16.9)
                echo "<p style='color:Yellow'> Magreza grau II</p>";

            if ($imc < 16)
                echo "<p style='color:Yellow'> Magreza grau III</p>";

        }
        

    ?>
    <div class="cabecalho">
        <p>Calculadora IMC - Resultados</p>
        <hr>
    </div>
    
    <div class="resultados">
        <p><b>Peso informado: </b><?=$peso ?>Kg</p>
        <p><b>Altura informada: </b><?=number_format($altura, 2, ','  )?>M</p>
        <hr>
        <p><b>IMC: </b><?=number_format($valor_imc, 2,',') ?></p>
        <p><b>Classificação: </b> <?= classificaIMC($valor_imc)?> </p>
        <br>
        <a href="./">Calcular Novamente</a>
    </div>
</body>
</html>