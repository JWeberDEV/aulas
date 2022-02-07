<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Exercicio While</title>
</head>
<body>
<div>
    <form action="tabuada.php" method="post">
      <label>Número</label>
      <select name="numero" id="">
        
        <?php 
          for ($i=1; $i <=10 ; $i++) { 
            echo"
              <option value='$i'>$i</option>
            ";
          }
          
        ?>
      </select>
      <br>
      <br>
      <input type="submit" value="Enviar" class="botao">

    </form>
</div>
</body>
</html>
