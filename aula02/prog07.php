<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Senac - Curso de PHP</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div>
        <?php
            $preco = $_GET["preco"];
            $vista = ($preco * 0.90);
            $parcelado = ($preco * 1.15);
            $parcelado2 = ($parcelado / 10);
        //     $num1 = $_GET["num1"];
        //     $num2 = $_GET["num2"];
        
        // $total = ($num1 + $num2);

            echo "O preço do produto é de: $preco  reais";
            echo "<br>O preço dele comprado a vista será de: $vista reais. ";
            echo "<br>O preço do produto parcelado sera de: $parcelado reais.";
            echo "<br> Parcela a partir de: 10x $parcelado2."
            // echo "<br>A soma de $num1 - $num2 = ".($num1 - $num2);

        ?>
    </div>
</body>
</html>