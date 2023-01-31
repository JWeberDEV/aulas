<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <label>Escolha a Tabuada</label>
    <form action="tabuada_logica.php" method="post">
      <select name="tabuada">
        <?php 
          $i = 1;

          while ($i <= 10) {
          
            echo"<option value='$i'>$i</option>";
            $i ++;
          }
        ?>
      </select>
    
      <br>
      <input type="submit" value="Enviar" class="botao">
    </form>
</div>
</body>
</html>
 