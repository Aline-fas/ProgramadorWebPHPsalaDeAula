<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
    
</head>
<body>
    <div>
        <?php  
            echo 'Desafio Índice';

            $lista = array (
                1,
                4 => 2,
                3 => 3,
                'a' => 4,
                '9' => 5,
                '06' => 7,
                0 => 8, 
            );
           /* array([0] => 8 
                    [3] => 3
                    [4] => 2 
                    [a] => 4
                    [9] => 5
                    [06] => 7
                    )
           */
          echo '<br>';
          print_r($lista);
        ?>   
    </div>
</body>
</html>