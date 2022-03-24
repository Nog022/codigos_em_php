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
        /*
        //sequencias (numericos)
        //$lista_frutas = array('banana', 'maçâ', 'morango', 'uva', 'abacate');
        $lista_frutas = ['banana', 'maçâ', 'morango', 'uva', 'abacate'];

       
        $lista_frutas[] = 'abacaxi';
        echo '<pre>';
            var_dump($lista_frutas);
        echo '</pre>';
        echo '<hr>';
        echo '<pre>';
            print_r($lista_frutas);
        echo '</pre>';
        
        echo $lista_frutas[2];
        */

        $lista_frutas = [  
            'a' => 'banana',
            'b' =>'maçâ',
            'x' =>'morango',
            'z' =>'uva',
            '2' =>'abacate'];

            $lista_frutas['w'] = 'abacaxi';

            echo '<pre>';
            var_dump($lista_frutas);
            echo '</pre>';
            
            
            echo $lista_frutas['w'];
    ?>


</body>
</html>