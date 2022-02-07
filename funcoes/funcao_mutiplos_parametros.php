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
      function soma(){
        $vetor = func_get_args(); // função que se usa para pegar todos os valores que serão inseridos emum vetor
        $total = func_num_args(); // funcao que se usa para saber o total de parametros passados nesta função
        $s = 0;
        for ($i=0; $i < $total; $i++) { 
          $s += $vetor[$i];
        }
        return $s;
      }
      
      $result = soma(3,5,7);
      echo "a soma dos valores é: $result";

      // esta função só funciona desta forma por que func_get_args capta todos os valoresque estãosendo passados, e pela func_num_args que pega o total de parametros da na rotina, usando dentro de um for para percorrer todo os valores.
       
    ?>
</div>
</body>
</html>
