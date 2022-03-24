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

      $itens = ['sofa', 'mesa', 'cadeira', 'fogão', 'geladeira'];
      
      echo '<pre>';
      print_r($itens);
      echo '</pre>';

      foreach($itens as $itens) {
            echo "$itens <br>";

            if($itens == 'mesa') {
                echo '(*compre uma mesa e ganhe 25% de desconta na compra de 4 cadeiras';
            }
      }     echo '<br>';
    ?>


</body>
</html>