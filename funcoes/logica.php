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
