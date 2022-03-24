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
        
        //in_array() -> exibe true ou false 
        //array_search -> retorna o indice do valor pesquisado, caso ele exista

        $lista_frutas = ['banana', 'maçâ', 'morango', 'uva'];
        
        /*
        echo '<pre>';
        print_r($lista_frutas);
        echo '</pre>';


        /*
        //$existe = in_array('morango', $lista_frutas);
        //true -> texto = 1
        //false -> texto =  vazio
        $existe = array_search('uva', $lista_frutas);
        //null -> texto =  vazio

        
        if($existe != null) {
            echo 'Sim, o valor pesquisado existe no array';

        } else {
            echo 'Não, o valor pesquisado não existe no array';
        }
        */


        $lista_coisas = [
            'frutas' => $lista_frutas,
            'pessoas' => ['joao', 'Maria']
        ];

        echo '<pre>';
        print_r($lista_coisas);
        echo '</pre>';

        echo in_array('joao', $lista_coisas)

    ?>


</body>
</html>