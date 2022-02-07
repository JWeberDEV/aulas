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
      $n = isset($_POST["numero"])?$_POST["numero"]:'1';
      echo "A tabuada de $n é:";
      
      for ($i=1; $i <=10 ; $i++) { 
        $result = $i * $n;
        
        echo" <br>$i X $n = $result "; 
      }
      
    ?>
</div>
</body>
</html>
