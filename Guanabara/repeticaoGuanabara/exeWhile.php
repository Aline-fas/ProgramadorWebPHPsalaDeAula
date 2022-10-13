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
        Resultado da contagem: <br>
        <?php
        // $np = $_GET["numeroP"];
        // while ($np <= 20) {
        //     echo $np. "<br>";
        //     $np++;
            
        // }

        $np = $_GET["numeroR"];
        while ($np >=1) {
            echo $np . "<br>";
            $np--;
        }

        ?>
        <a href="exeWhile.html">Voltar</a>
    </div>
</body>
</html>