<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    // ?a=5&b=8 precisa ser posto no final da url para o codigo abaixo funcionar.
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    // $resultado = ($n1 + $n2) / 2;

    // echo "O resultado seria: $resultado ";

    // funcoes aritmeticas
    echo "valores recebidos: $n1 . $n2";
    echo "<br>valor absoluto de $n1 e " . abs($n1); 
    echo "<br>valor de potenciao $n1 <sup> $n2 </sup> e " . pow($n1, $n2);
    echo "<br>Raiz de  $n2 e " . sqrt($n1);
    echo "<br>valor arredondado de  $n1 e " . round($n1); // ceil() no lugar para arredondar para arredondar para cima floor() para arredondar para baixo
    echo "<br>A parte inteira de  $n1 e " . intval($n1);
    echo "<br>O valor de $n1 em moeda e R$" . number_format($n1,2,",");
    echo "<br>";
    echo "<br>";
    echo "Operador Unaro";
    echo "<br>";
    $var1 = 3;
    $var2 = 2;
    echo " Os valores de Var1: $var1 e var2: $var2 .";
    echo "<br>";
    $result = $var1 > $var2  ? $var1 + $var2 : $var1 - $var2;
    echo "o resultado do operador unaro e: $result .";
    echo "<br>";
    $var3 = "3";
    $var4 = 3;
    $resultado = ($var3 === $var4)  ? "Sim" : "Nao";
    echo "o resultado do operador unaro e: $resultado .";
    echo "<br>";
    $var5 = 5;
    $var6 = 2;
    $media = ($var5 + $var6) / 2;

    $final = ($media > 6) ? "Aprovado" : "Reprovado";
    echo "<br>";
    echo "A media do aluno foi: $media " . "O Aluno foi: $final" . ".";
    echo "<br>";

    $ano = $_GET["c"];
    $idade = 2022 - $ano;
    echo "<br>";
    echo "A sua idade e: $idade .";
    $votar = ($idade >=18 && $idade<=65) ? "Obrigatorio" : "Opcional";
    echo "o seu voto e: $votar";
  ?>
  
</body>
</html>
