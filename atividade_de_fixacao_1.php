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
        //MEU MODO DE FAZER
        $idade = 19;
        $peso = 72;

        if($idade >= 16 && $peso >= 50){
            echo 'Atende aos requisitos';

        } else if($idade <= 69 && $peso >= 50) {
            echo 'Atende aos requisitos';

        } else {
            'Não atende aos requisitos';
        }
    ?>

        
    <?php 
    //GABARITO
   /* $idade = 19;
    $peso = 72;

    if($idade >= 16 && $idade <= 16) && $peso >= 50{
        echo 'Atende aos requisitos';
    
    } else {
        echo "Não atende aos requisitos";
    }
    */ 

    
    
    ?>
</body>
</html>