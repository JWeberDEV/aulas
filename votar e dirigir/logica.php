<?php 
    $idade = $_POST["idade"];
    $votar = ' ';
    $dirigir = ' ';

    if ($idade >= 18) {
      $votar = true;
      $dirigir = true;
      echo "A pessoa pode votar e dirigir";
      echo "<br> $votar";
      echo "<br> $dirigir";
    }elseif ($idade >= 16) {
      $votar = true;
      $dirigir = false;
      Echo "a pessoa ja pode votar mas nao pode dirigir";
      echo "<br> $votar";
      echo "<br> $dirigir";
    }elseif ($idade <= 15) {
      $votar = false;
      $dirigir = false;
      echo "A pessoa nao pode votar e nem dirigir";
      echo "<br> $votar";
      echo "<br> $dirigir";
    }
    echo "<br><button><a href='index.php'>voltar</a></button>"
  ?>