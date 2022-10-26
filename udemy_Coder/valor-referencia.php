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
            // PASSAGEM POR VALOR (COPIA)
            $varA = 'Ola!';
            $varB = $varA;
            echo "$varA $varB";
            $varB = 'Tudo bem?';
            echo "<br>$varA $varB";
        
            // PASSAGEM POR REFERENCIA
            $varA = 'Ola!';
            $varB = &$varA;
            echo "<br>$varA $varB";
            $varB = 'Tudo bem?';
            echo "<br>$varA $varB";
            echo"<p>Faz!</p><hr>";
            echo"<p>Fez?</p>";



        ?>   
    </div>
</body>
</html>