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
      $valor = $_POST["tabuada"];
      $i = 1;
      
      do {
        $resultado = $valor * $i;
        echo "$valor X $i = $resultado <br>";
        $i ++;
        
      } while ($i <= 10);
        
    ?>
    <br>
    <button ><a href='tabuada.php' >voltar</a></button>
</div>
</body>
</html>
 