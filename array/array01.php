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
            ARRAYS        
        </h1>
        
        <hr>
        <br>
        <pre>

            <?php
                $c = array (15,12,1978,70,22);
                // echo $c[2];
                print_r($c);

                echo "<br>";
                $a[0] = 10;
                $a[1] = 15;
                $a[2] = 13;
                $a[3] = 22;
                $a[4] = 14;
                $a[5] = 16;

                print_r($a);
                
                $a[] = 75; 
                print_r($a);

                ?>
        </pre>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>