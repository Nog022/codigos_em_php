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
        
        $parametro = 2;

        switch ($parametro) {
            case 1 == $parametro:
                echo 'Entro no case 1';
                break;
            
            case 2 == $parametro:
                echo 'Entro no case 2'; 
                break;

            case 3 == $parametro:
                echo 'Entro no case 3'; 
                break;

            default:
            #code... 
            break;
        }

    ?>
</body>
</html>