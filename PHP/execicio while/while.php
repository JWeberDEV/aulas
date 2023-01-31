<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
      $inicio = $_POST["inicio"];
      $limite = $_POST["limite"];
      $contador = $_POST["contador"];

      if ($inicio < $limite) {
        
        while ($inicio <= $limite) {
          echo $inicio. " ";
          $inicio = $inicio + $contador;
        }
      }else {
        
        while ($inicio >= $limite) {
          echo $inicio. " ";
          $inicio = $inicio - $contador;
        }
      }
      
      
    ?>
    <br>
    <button ><a href='index.php' >voltar</a></button>
</div>
</body>
</html>
