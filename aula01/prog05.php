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
        
            $nome = $_GET["nome"];
            $idade = $_GET["idade"];
            $sexo = $_GET["sexo"];

            echo "Olá, " .($nome). ". No momento você tem " .$idade. " anos e é do sexo: " .$sexo;
            // echo "Olá, " .($nome). ". No momento você tem " .$idade. " anos e é do sexo: " .$sexo;


        ?>
    </div>
</body>
</html>