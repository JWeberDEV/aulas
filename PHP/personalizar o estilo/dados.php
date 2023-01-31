<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Document</title>
</head>
<body>
  <div class="central">
    <form class="formulario" method="post" action="dados.php">
    <?php 
    $valor = $_POST["valor"];
    echo "O valor digitado foi: $valor. sua raiz quadrada e: " . sqrt($valor) ;

    ?>
    <button><a href="index.html">Voltar</a></button>
    </form>
  </div>
</body>
</html>