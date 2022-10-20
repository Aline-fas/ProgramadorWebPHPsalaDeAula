<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Senac - Curso de PHP</title>
</head>
<body>
    <div>
        <p style="text-align: center;">
        Exercitando condições de multiplos casos em switch.
        </p>
        <?php 
        $n = $_POST["numero"];

        switch($n){

        case 1:   
        case 7:
            $resposta = "Dia de descanço...";
            break;
        case 2:           
        case 3:
        case 4:
        case 5:
        case 6:
            $resposta = "Dia de trabalho e (ou) estudar.";
            break;
        default:
            $resposta = "Número de dia da semana invalido!";
        }

        echo $resposta;
        ?>
        <br>
        <a href="exemploSwitch2.html">
        <i class="bi bi-reply" style="font-size: 2rem; color: cornflowerblue;"></i> 
        </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</body>
</html>