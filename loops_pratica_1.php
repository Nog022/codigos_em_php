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

        $registro = [
            array('titulo' => 'Titulo noticia 1', 'conteudo' => 'conteudo noticia 1'),
            array('titulo' => 'Titulo noticia 2', 'conteudo' => 'conteudo noticia 2'), 
            array('titulo' => 'Titulo noticia 3', 'conteudo' => 'conteudo noticia 3'),
            array('titulo' => 'Titulo noticia 4', 'conteudo' => 'conteudo noticia 4')
        ];
        echo '<pre>';
        print_r($registro);
        echo '</pre>';
        echo '<br> <br> <br> <br>';
        

        //count - > conta a quantidade de elemntos de array
        echo 'O array possui: ' . count($registro) . 'registros';
        echo '<br>';
        /*
        while($idx < count($registro)) {

            echo '<h3>' . $registro[$idx]['titulo'] . '</h3>';
            echo '<p>' . $registro[$idx]['conteudo'] . '</p>';
            echo '<hr>';

            $idx++;
        }
        */
        /*
        do {
            echo '<h3>' . $registro[$idx]['titulo'] . '</h3>';
            echo '<p>' . $registro[$idx]['conteudo'] . '</p>';
            echo '<hr>';

            $idx++;

        } while($idx < count($registro));
        */

        for($idx = 0;$idx < count($registro);$idx++){
            echo '<h3>' . $registro[$idx]['titulo'] . '</h3>';
            echo '<p>' . $registro[$idx]['conteudo'] . '</p>';
            echo '<hr>';
        }

   
   
   ?>


</body>
</html>