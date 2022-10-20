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
            Arrays 04 com Chaves personalizadas.
        </h1>
        <hr>
        <br>
        <pre>
        <?php
       $a = array("Texto" => "A", 3 => "B", 5 => "C", 6 => "D", 5 => "3");
        $a[]= 1978;
       print_r($a);
       echo "<br>";
       echo "Imprimindo a posição [Texto] = " . $a["Texto"];
       echo "<br>";
       
       $pessoa = array("nome"=> "Márcio Velasco", "idade" => 43, "sexo" => "M" );
       print_r($pessoa);
       echo "<br>";
       $pessoa["tem_cnh"] = false;
       print_r($pessoa);

        foreach($pessoa as $campo => $valor){
            // echo "O valor de $campo é $valor <br>";
            // if($campo == "tem_cnh"){
            //     // $valor == 1 ? $valor = "Sim" : $valor = "Não";
            //     $valor ? $valor = "Sim" : $valor = "Não";
            // echo "O valor de $campo é $valor <br>";
            // }
            
            // echo  "O valor de " . ($campo == "tem_cnh" ? ($valor ? "$campo é Sim" : "$campo é Não") : "$campo é $valor <br>");
            
            echo  "O valor de $campo é " . ($campo == "tem_cnh" ? ($valor ? "Sim" : "Não") : "$valor <br>");

            //     Condição ? Verdadeiro : Falso;
            //     if(      ) {       } else {     }
        }


        ?>
        </pre>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>