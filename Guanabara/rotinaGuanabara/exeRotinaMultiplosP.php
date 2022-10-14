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
        echo "<h2>Rotinas com Parâmetros Dinâmicos</h2>";
       
        function soma (){
            $p = func_get_args();
            $t = func_num_args();
            $s = 0;
            for ($i=0; $i<$t;$i++){
                $s += $p[$i];
            }
            return $s;
        }

        $r = soma (3,5,2,5,35);
        echo "A soma dos valores é: ".$r;
        ?>
    </div>
</body>
</html>