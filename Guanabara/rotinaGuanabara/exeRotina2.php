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
            function soma ($a,$b){
                $s = $a + $b;
                return $s; // o retorno deve ser colocado dentro de uma variável

                // ou pode fazer da seguinte maneira:
                // return $a + $b;

            }

            $x = 3;
            $y = 4;
            $resposta = soma ($x,$y);

            echo "A soma entre $x e $y vale $resposta";
            
        ?>
    </div>
</body>
</html>