<?php 
  //include serve para incluir simplesmente um arquivo
  //require serve para incluir um arquivo, mas caso esse aqrquivo tenha  sido corrompido, ou esta com algum problema o resto do sistema onde aquele arquivo é "requerido" o scriptirápara no moment em que o require for usado.
  function ola(){
    echo"<h1> ola, mundo</h1>";
  }

  function mostraValor($x){
    echo "<h2> $x </h2>";
  }
?>