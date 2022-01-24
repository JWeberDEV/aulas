<?php 
  $valor = isset ($_POST["operacao"])? $_POST["operacao"]: 0 ;
  $opcao = isset ($_POST["oper"])? $_POST["oper"]: 1;
  
  switch ($opcao) {
    case '1':
        $resultado = $valor * 2;
        echo "O resultado da operacao selecionada e: $resultado";
      break;
    case '2':
        $resultado = $valor ^ 3;
        echo "O resultado da operacao selecionada e: $resultado";
      break;
    case '3':
        $resultado = sqrt($valor);
        echo "O resultado da operacao selecionada e: $resultado";
      break;
    
  }
  
?>