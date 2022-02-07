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
      include "funcoes.php";
      // function executa tudo que esta dentro do corpo e no final exibe o resultado detro da propria estrutura
      // procedures executa tudo que esta dentro do corpo e retorna algo no final
      // FORMAS_DE_PASSAGEM_DE PARAMETROS

      //passagem por valor
      function teste(&$x){
      $x = $x -7;
      echo "valor de X $x <br>";
      }
      
      $a =3;
      teste($a);
      echo "Valor de A $a";

      echo "</br>";
      echo "<h2>testando o include</h2>";
      ola();
      echo "</br>";
      mostraValor("teste");
    ?>
</div>
</body>
</html>
