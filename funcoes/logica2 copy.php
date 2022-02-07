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
      return $a + $b;
      }
      
      soma(7,8);

      $x = 10;
      $y = 13;

      echo"<br>";
      $r = soma($x,$y);
      echo "A soma entre $x, e $y é igual a $r";
    ?>
</div>
</body>
</html>
