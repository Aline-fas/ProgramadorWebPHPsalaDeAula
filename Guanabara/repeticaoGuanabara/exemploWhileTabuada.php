<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Document</title>
</head>
<body>
    <div>
        <p>
            Tabuada  de 1 a 10.
        </p>
        <?php

        $nu =  $_GET["valor"];
        $multiplica = 1;

        while ($multiplica <=10) {
            $resultado = $nu * $multiplica;
            echo " $nu x $multiplica = $resultado  <br>";
            $multiplica ++;

        }

        ?>
        <a href="exemploWhileTabuada.html">Voltar</a>
        
    </div>
</body>
</html>