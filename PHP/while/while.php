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
      $opcao = $_POST["opcao"];

      switch ($opcao) {
        case 'progressiva':
          $i = 0;
  
          while ($i <= 10) {
            echo $i;
            $i ++ ;
          }
        break;
  
        case 'regressiva':
          $i = 10;
  
          while ($i >= 1) {
            echo $i;
            $i -- ;
          }
        
        break;

        case 'caixas':
          $i = 1;
          while ($i <= 5) {
            $v = "num".$i;
            $url = "v".$i;
            $$v = isset ($_POST[$url]) ? $_POST[$url] : 0;
            $i++;
          }
        break;
      }

    ?>
    <br>
    <button ><a href='index.php' >voltar</a></button>
</div>
</body>
</html>
 