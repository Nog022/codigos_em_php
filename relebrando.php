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
    
        /*

        $idade = 16;
        $peso = 50;

        if($idade >= 16 && $idade <= 69 && $peso >= 50){
            echo ('Está atendendo os requisitos');

        }else{
            echo('Não atende os requisitos');
        }
        */

        function calculandoImposto($salario){
            if($salario == 1.903,98){
                return 0;

            }else if($salario > 1.903,98 && $salario < 2.826,65){
                return ($salario * 7.5) / 100;

            }else if($salario > 2.826,65 && $salario < 3.751,05){
                return ($salario * 15) / 100;

            }else if($salario > 3.751,05 && $salario < 4.664,68){
                return ($salario * 22.5) / 100;

            }else if($salario > 4.664,68){
                return ($salario * 27.5) / 100;
            }
        }

        $salario = 1.903,98;

        $calculado = calculandoImposto($salario);
        echo $calculado
    

    
    ?>
       
    
</body>
</html>