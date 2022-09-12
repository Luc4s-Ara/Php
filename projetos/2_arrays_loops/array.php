<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
      //array sequencial 
      $lista_compras = array("Ovos", "Bananas", "Leite" ,"Chocolate");
      $lista = ["Frutas", "Pão", "Arroz",1111111111.555555555, true];
        
      echo "<pre>";
      var_dump($lista);
      echo "</pre>";
     
      echo"<hr>";
     
      echo "<pre>";
      var_dump($lista_compras);
      echo "</pre>";

      echo"hr";
     
      echo "<pre>";
      var_dump($lista[2]);
      echo "</pre>";

      //paramos aqui ... falta "array associativo"
      $lista ["x"] = "Uninove";
      var_dump($lista);
      echo "</prev>";

      echo "<hr>";

      $dados_aluno["nome"] = "Lucas Araujo";
      $dados_aluno["nota"] = 9;
      $dados_aluno["email"] = "thiago.traue@uni9.pro.br";
      $dados_aluno["aprovado"] = true;

      echo "<pre>";
      var_dump($dados_aluno);
      echo "</pre>";


    
      
    

     ?>
</body>
</html>