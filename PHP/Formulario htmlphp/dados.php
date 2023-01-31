<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php 
    $texto= $_POST["texto"];
    $tamanho= $_POST["tam"];
    $cor= $_POST["cor"];
  ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <style>
    span.texto{
      font-size: <?php echo $tamanho; ?>;
      color: <?php echo $cor; ?>;
    }
  </style>
  <title>Document</title>
</head>
<body>
  <div class="central">
    <div class="formulario">
      <?php
      
        echo "O Texto Formatado e:";
        echo "<br><span class='texto'>$texto</span>";
      ?>
      <br><button><a href="index.html">voltar</a></button>
    </div>
  </div>
</body>
</html>