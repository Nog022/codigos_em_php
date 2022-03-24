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
        
        $lista_coisas = [];

        $lista_coisas['frutas'] = ['1'=>'banana','2'=> 'maçâ','3'=> 'morango','4'=> 'uva'];
        $lista_coisas['pessoas'] = ['1'=>'joão','2'=> 'jose','3'=> 'maria'];


        echo '<pre>';
        print_r($lista_coisas);
        echo '</pre>';

        echo '<hr>';
        echo $lista_coisas['frutas'][3];
        echo '<br>';
        echo $lista_coisas['pessoas'][2];

    ?>


</body>
</html>