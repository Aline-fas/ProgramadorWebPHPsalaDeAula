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
            return $a + $b;
            // ou pode fazer da seguinte maneira:
            // $s = $a + $b;
            // return $s;

        }
        $x = 4;
        $y = 5;
        $r = soma($x,$y);
        echo "a soma entre $x e $y = $r";
        ?>
    </div>
</body>
</html>