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
            DESAFIO.
        </p>
        <p>Escreva um número, para verificar se o mesmo é um número Primo.
            <br>Os Números Primos são números naturais maiores do que 1 que
            possuem somente dois divisores, ou seja, são divisíveis por
            1 e por ele mesmo.
        </p>
        <hr>
        <br>

        <?php
        $n = $_POST["numero"];
        $qtd = 0;

        echo "<h2>Analisando o número $n...</h2>";
        echo "<h2>Valores múltiplos: ";
        for($i = 1; $i <= $n; $i++){
            if($n % $i == 0){
                echo "$i ";
                $qtd++;
            }
        }
        echo "</h2>";
        echo "<h2>Total de múltiplos: $qtd</h2>";
        echo "<h2>Resultado: $n - ".(($qtd >2) ? "Não é Primo!" : "É Primo") ."</h2>";

        ?>

        <br>
        <br>
        <a href="exemploFor2.html" class="btn btn-link">
            <i class="bi bi-reply" style="font-size: 2rem;"></i>

        </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>