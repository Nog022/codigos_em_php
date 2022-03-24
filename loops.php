<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>

    <?php
       
       $num = 1;
       // operadores compração / lógicos
       //break --> para o laço
       //continue --> pula para o proxima etapada 
       echo '-- Início do loop --<br>';
      while($num < 1000) {

        continue;

          echo "$num <br>";
          $num += 5;
          
          if($num == 2 || $num == 6) {
              break;
              
          }

          echo "$num <br>";
        }
       
        echo '-- Fim do loop --';
    ?>


</body>
</html>