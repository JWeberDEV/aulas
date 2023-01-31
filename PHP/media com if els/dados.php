<?php 
$aluno = $_POST["Aluno"];
$n1 = $_POST["nota1"];
$n2 = $_POST["nota2"];
$media = ($n1 + $n2) / 2;

if ($media < 6) {
  echo "A media do aluno: $aluno e: $media . Sendo assim o Aluno esta reprovado.";
}elseif ($media >= 6) {
  echo "A media do aluno: $aluno e: $media . Sendo assim o Aluno esta aprovado.";
}
echo "<br><button><a href='index.html'>voltar</a></button>";
?>