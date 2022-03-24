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

        $funcionarios = [
            array('nome' => 'joao', 'salario' => 2500), 
            array('nome' => 'maria', 'salario' => 3000),
            array('nome' => 'julia', 'salario' => 2200)
        ];


        echo '<pre>';
        print_r($funcionarios);      
        echo '</pre>';  
        
        foreach($funcionarios as $idx => $funcionario) {
            
            foreach($funcionario as $idx2 => $valor) {
                echo "$idex2 - $valor <br>";
            }
        }
        
    ?>


</body>
</html>