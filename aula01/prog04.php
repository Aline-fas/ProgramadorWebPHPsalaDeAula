<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilo/style.css">
    <title>Document</title>
</head>
<body>

    <div>
        <?php
            $num1 = $_GET["num1"];
            $num2 = $_GET["num2"];
        
        $total = ($num1 + $num2);


        echo "A soma de " .$num1. " + " .$num2. " = " .($num1 + $num2);
        echo "<br>A soma de " .$num1. " + " .$num2. " = " .$total;
        echo "<br>A soma de $num1 - $num2 = ".($num1 - $num2);
        echo "<br>A soma de $num1 * $num2 = ".($num1 * $num2);
        echo "<br>A soma de $num1 / $num2 = ".($num1 / $num2);
        echo "<br>A soma de $num1 % $num2 = ".($num1 % $num2);



        ?>
    </div>
</body>
</html>