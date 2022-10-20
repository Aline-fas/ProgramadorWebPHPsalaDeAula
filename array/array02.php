<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css" />
    <title>Senac - Curso de PHP</title>
</head>

<body>
    <div>



        <h1 style="text-align: center;">
            Arrays 02.
        </h1>
        <hr>
        <br>
        <pre>
        <?php
        //(início, fim, tamanho do passo)
        //No exemplo esta de 1 em 1
        // Tamanho de um array é n - 1;
           $a = range(1, 10, 1);
           print_r($a);
           $tamanho = count($a);
           echo "<br>";
           echo "Tamanho do Array: $tamanho";
           echo "<br>";
           echo "Tamanho do Array: " . $tamanho;
           echo "<br>";
           echo "Tamanho do Array: " . count($a);
           echo "<br>";
           
           //    echo "Tamanho do Array:  count($a)";// Erro a função count retorna valor. Precisa ser concatenado ou guardado em uma variável.
           echo "Elemento da posição [5]: ".$a[5];
           echo "<br>";
           echo "<br>";
           $a[] = 100;
           echo "Tamanho do Array: " . count($a);
           echo "<br>";
           for($i=0 ; $i < count($a) ; $i++){
                echo "[$i] => $a[$i] <br>";    
            }

        ?>
        </pre>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>