<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
      $estado = $_POST["estados"];
      
      switch ($estado) {
        case 'Rio Grande do Sul':
        case 'Santa Catarina': 
        case 'Parana':  
            echo "Voce mora na <span class='foco'>Região Sul</span>";
        break;

        case 'Sao Paulo':
        case 'Rio de Janeito':
        case 'Espirito Santo': 
        case 'Minas Gerais':
          echo "Voce mora na <span class='foco'>Região Sudeste</span>";
        break;

        case 'Mato Grosso':
        case 'Mato Grosso do Sul':
        case 'Goias': 
          echo "Voce mora na <span class='foco'>Região Centro-Oeste</span>";
        break;

        case 'Maranhao':
        case 'Piaui':
        case 'Ceara': 
        case 'Rio Grande do Norte':
        case 'Pernambuco':
        case 'Paraiba':
        case 'Sergipe': 
        case 'Alagoas':
        case 'Bahia':
          echo "Voce mora na <span class='foco'>Região Nordeste</span>";
        break;

        case 'Amazonas':
        case 'Roraima':
        case 'Amapa': 
        case 'Para':
        case 'Tocantins':
        case 'Rondonia':
        case 'Acre': 
          echo "Voce mora na <span class='foco'>Região Norte</span>";
        break;
        
      }
    ?>
    <br>
    <button ><a href='index.php' >voltar</a></button>
</div>
</body>
</html>
 