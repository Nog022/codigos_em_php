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

        $texto = 'curso completo de php';

        //string to lower
        echo $texto . '<br>';
        echo strtolower($texto);

        echo '<br>';

        //string to upper
        echo $texto . '<br>';
        echo strtoupper($texto);

        echo '<br>';

        //upper case first
        echo $texto . '<br>';
        echo ucfirst($texto);

        echo '<br>';

        //strings lenght
        echo $texto . '<br>';
        echo strlen($texto);

        echo '<br>';

        //strings replace
        echo $texto . '<br>';
        echo str_replace('php', 'JavaScript', $texto);

        echo '<br>';

        //subrtr
        echo $texto . '<br>';
        //'curso completo de php'
        //0,1,2,3,4,5 ... 20
        echo substr($texto, 0, 14) . ' ... ';



    ?>

</body>
</html>