<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilo.css" />
    <title>Senac - Curso de PHP</title>

</head>

<body>
    <div>
        <p style="text-align: center;">
            Desafio: Escreva um programa que exiba a tabuada
            de um número escolhido pelo usuário, de 1 a 10.
            Feito com estrutura de repetição FOR.
        </p>
        <hr>
        <br>

        <?php

        $n = $_GET["numero"];

        echo "<h2 style='text-align: center;'>Mostrando a Tabuada de $n</h2>";

        for ($c = 1; $c <= 10; $c++) {
            echo "<h3 style='margin:0 175px;'>$n x $c = " . ($n * $c) . "</h3>";
        }

        ?>

        <br>
        <br>
        <a href="exemploFor.php" class="btn btn-link">
            <i class="bi bi-reply" style="font-size: 2rem;"></i>

        </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>