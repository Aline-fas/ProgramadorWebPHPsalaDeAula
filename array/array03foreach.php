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
            
                $a = range (1,10,1); //(inicio, fim, tamanho do passo)
                print_r($a);
                $tamanho = count($a);
                
                echo "<br> <hr>";
                
                // echo "Elemento da posição [5]: $a[5] <br>";
                
                $a[] = 100;
                
                // for ($c=0;$c< count($a);$c++){
                    //     echo "[$c] => $a[$c] <br>";
                    
                    // }
                    
                    echo "Tamanho do Array: $tamanho<br>";

                foreach ($a as $i => $valor) {
                    echo "[$i] => $valor <br>";
                   

                }

                ?>
        </pre>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>