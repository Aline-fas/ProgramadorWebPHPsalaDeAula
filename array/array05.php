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
            Arrays 05 com Chaves personalizadas.
        </h1>
        <hr>
        <br>
        <pre>
        <?php
            $a = array("A","B","C","D","E");
            print_r($a);
            $tamanho = count($a);
            echo "Tamanho do Array - count(array): $tamanho <br>";
            echo "Coloca um novo elemento no final do array[] = 'dado';";
            $a []= "F";
            print_r($a);
            echo "<br> ------------------------------------ <br>";
            echo "Coloca um novo elemento no final do array_push (array,'dado');";
            array_push ($a,'G');
            echo "<br>";
            print_r($a);
            echo "<br> ------------------------------------ <br>";
            echo "Elimina o ultimo elemento do array; array_pop(array)";
            array_pop($a);
            echo "<br>";
            print_r($a);
            echo "<br> ------------------------------------ <br>";
            echo "Remove uma posição do vetor unset (array[posição])";
            unset($a[0]);
            echo "<br>";
            print_r($a);
            echo "<br> ------------------------------------ <br>";
            echo "Coloca um novo elemento no inicio do array. array_unshift (array, 'dado')";
            array_unshift($a, "A");
            echo "<br>";
            print_r($a);
            echo "<br> ------------------------------------ <br>";
            echo "Elimina o primento elemento do array. array_shift(array)";
            array_shift($a);
            echo "<br>";
            print_r($a);
            echo "<br> ------------------------------------ <br>";
            echo "Ordenação: sort(array)= Ordena os elementos do array. ";
            $b = array ("E","C","D","B","A");
            echo "<br>";
            print_r($b);
            echo "<br>";
            echo "sort() - Ordena em ordem crescente.";
            sort($b);
            print_r($b);
            echo "<br> ------------------------------------ <br>";
            echo "rsort() - Ordena em ordem decrescente.";
            rsort($b);
            print_r($b);
            echo "<br> ------------------------------------ <br>";
            echo "ksort(array) = Ordena os elementos do array pelos índices 'key'";
            $c = array(4=> "A", 3=>"B", 2=>"C", 1=>"D", 0=> "E");
            echo "<br>";
            print_r($c);
            echo "<br>";
            ksort($c);
            print_r($c);
            echo "<br> ------------------------------------ <br>";
            echo "var_dump(variável): Mostra as informações sobre a variável";
            var_dump ($c);





            

       
        ?>
        </pre>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>