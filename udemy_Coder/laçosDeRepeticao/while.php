<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
        echo "WHILE<br><br>";
        
        const VALOR_LIMITE = 5;
        $contador = 0;

        // while ($contador < VALOR_LIMITE){
        //     echo "while $contador ";
        //     $contador++;
        // }

        while(true){
            echo " while(true) $contador ";
            $contador++;
            if($contador>=VALOR_LIMITE){
                break;
            }
        }
        ?>
    </div>
</body>
</html>