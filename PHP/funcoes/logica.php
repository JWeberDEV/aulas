<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Exercicio While</title>
</head>
<body>
<div>
    
    <?php 
      // function executa tudo que esta dentro do corpo e no final exibe o resultado detro da propria estrutura
      // procedures executa tudo que esta dentro do corpo e retorna algo no final

      function soma($a, $b){
      $s = $a + $b;
      echo "A soma vale: $s";  
      }
      
      soma(7,8);

      $x = 15;
      $y = 13;

      echo"<br>";

      soma($x,$y);
    ?>
</div>
</body>
</html>
