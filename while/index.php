<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Switch Estados</title>
</head>
<body>
<div>
    <label> Selecione uma opcao </label>
    <form action="while.php" method="post">
      <select name="opcao">
        <option value="progressiva">progressiva</option>
        <option value="regressiva">regressiva</option>
        
      </select>
      <br>
      <input type="submit" value="Enviar" class="botao">
    </form>
    <br>
    <form action="while.php" method="post" name="opcao">
      <select name="opcao">
        <option value="caixas">caixas de texto</option>
      </select>
      <br>
      <?php 
        $i = 1;

        while ($i <= 10) {
        
          echo" Valor$i: <input type='number' name='v$i' id='' max='100' min='0' value='0'><br>";
          $i ++;
        }
      ?>
      <input type="submit" value="Enviar" class="botao">

    </form>
</div>
</body>
</html>
 