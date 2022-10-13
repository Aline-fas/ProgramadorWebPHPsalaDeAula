<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css" />
    <title>Senac - Curso de PHP</title>
</head>

<body>
    <div>



        <p style="text-align: center;">
            Desafio: Escreva um programa que exiba a tabuada
            de um número escolhido pelo usuário, de 1 a 10.
        </p>
        <hr>
        <br>
        <section style="height: 350px; width: 230px; margin: 0 auto;">
            <form action="exemploDoWhile3R.php" method="get">
                <?php
                $n = 1;

                echo "<label for='id1' class='form-label'>Número:</label>
            <select name='numero' id=''>";
                while ($n <= 10) {
                    // echo "<option value='$n'>$n</option>";
                    echo "<option>$n</option>";
                    $n++;
                }
                echo "</select>";
                ?>
                <input type="submit" value="Enviar" class="btn btn-primary">
                <br>
            </form>
        </section>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>