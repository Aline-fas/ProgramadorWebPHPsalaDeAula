<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">

    <title>Document</title>
</head>
<body>
<div>
        <?php
        
        $n = $_GET["valor"];
        $qtd = 0;

        echo "<h2> Analisando o número $n... </h2>";
        echo "<h2>Valores múltiplos";
        
        for ($i = 1; $i <= $n; $i++){
            if ($n % $i == 0) {
                echo " $i ";
                $qtd++;
            }
            
        }

        echo "</h2>";
        echo " <h2> Total de múltiplos: $qtd </h2>";
        echo "<h2> Resultado: $n - ".(($qtd >2)? "Não é primo!": "É primo")."</h2>";
        ?>
        <a href="numeroPrimoFor.php">Voltar</a>
    </div>
</body>
</html>