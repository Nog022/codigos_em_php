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



        $array = [];

        for($i = 0; $i < 6; $i++){
            $number_random = rand(1,60);
            $array[$i] = $number_random;
        }
        
        print_r($array);
    ?>


</body>
</html>