<!DOCTYPE html>
<html lang="pt/BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
   <title>Document</title>
</head>
<body>
    <div>
        <p style="text-align: center;">
            Exercitando condições de multiplos casos com switch.
        </p>
        <p>
        Escreva um programa que leia os estados do brasil e escreva a qual regiao este pertence. 
        </p>
        <?php
        $RB= $_GET["estados"];

        switch ($RB) {
            case "norte":
                echo "Você mora na região Norte do Brasil.";
                break;
            case "nordeste":
                echo "Você mora na região Nordeste do Brasil.";
                break;
            case "sudeste":
                echo "Você mora na região Sudeste do Brasil.";
                break;
            case "sul":
                echo "Você mora na região Sul do Brasil.";
                break;
            case "centro-oeste":
                echo "Você mora na região Centro-Oeste do Brasil.";
                break;
            default:
                echo  "inválido.";
        }
        ?>
        <br>
        <a href="exe11.html">
        <i class="bi bi-reply" style="font-size: 2rem; color: cornflowerblue;"></i>
        </a>

    </div>
</body>
</html>