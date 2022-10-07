<!DOCTYPE html>
<html lang="pt/BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
    <div>
        <p style="text-align: center;">
            Exercitando condições de multiplos casos com switch.
        </p>
        <p>
        Escreva um programa que leia um número, de acordo com o valor que representa um dia da semana, escreva se é dia de trabalhar / estudar. 
        </p>
        <?php
        $d = $_GET["ds"];

        switch($d){
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                $resposta = "Dia de trabalhar / estudar.";
                echo "O resultado da operação solicitada foi: $resposta";
                break;
            case 7:
            case 8:
                $resposta = "Dia de descanso.";
                echo "O resultado da operação solicitada foi: $resposta";
                break;
                default: 
                echo "Dia da semana inválido.";
        }

      

        ?>
        <br>
        <a href="exemploSwitch.html">
        <i class="bi bi-reply" style="font-size: 2rem; color: cornflowerblue;"></i>
        </a>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>