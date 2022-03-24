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

        $nome = "Maria";
        $cor = "amarelo";
        $idade = 25;
        $atividade_preferida = "andar de bicicleta";

        echo "Ola " . $nome . ", vi que sua cor favorita é " . $cor . ", estou vendo tambem que voce possui ". $idade ." anos e vi que voce gosta de ". $atividade_preferida ."";

        //aspas duplas
        echo "<br>";

        echo "Olá $nome, vi que sua cor favorita é $cor, estou vendo tambem que voce possui $idade anos e vi que voce gosta de $atividade_preferida";
    ?>

</body>
</html>