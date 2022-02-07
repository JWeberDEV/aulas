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
      $numero = $_POST["numero"];
      $contador = " ";
      echo "Analisando o número: $numero <br>";

      echo "Os números divisíveis são: ";
      for ($i=1; $i <= $numero; $i++) { 
        if ($numero % $i == 0) {
          
          echo " $i";
          $contador++;
        }
      }
      
      echo"<br>";
      echo"total de multiplos: $contador";

      if ($contador == 2) {
        echo"<br>O Número: $numero é <span class='foco'>Primo<span>";
      }else {
        echo"<br>O Número: $numero não é <span class='foco'>Primo<span>";
      }
      
    ?>
</div>
</body>
</html>
