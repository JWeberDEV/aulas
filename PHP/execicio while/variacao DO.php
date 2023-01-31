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
      // outra forma de representar o while
      // $i = 1;
      // do {
      //   echo $i;
      //   $i ++;
      // } while ($i <= 10);

      // fatorial de um numero

      $valor = 10;
      $sla = 5;

      do {
        $valor = $valor * $sla;
        $sla --;
      } while ($sla >= 1);

      echo $valor;
      
      
    ?>
    <br>
    <button ><a href='index.php' >voltar</a></button>
</div>
</body>
</html>
 