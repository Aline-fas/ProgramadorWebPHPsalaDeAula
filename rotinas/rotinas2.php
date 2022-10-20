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
            Procedimentos, Funções e Métodos.
        </h1>
        <h4 style="text-align: center;">Testando Funções</h4>
        <hr>
        <br>
        <pre>
        <?php
        
        include "funcoes.php";
        include "funcoes2.php";

        escreva_texto2("Meu texto executado por uma Procedimento.");
        // $texto = escreva_texto3("Meu texto executado por uma função com retorno.");
        // echo "Texto recebido => $texto"; 
        pulaLinha(0);
        echo "Texto recebido => " . escreva_texto3("TESTE!!!!"); 
        pulaLinha(0);
        echo "".escreva_texto3("--------------------------------------");
        pulaLinha(0);
        echo "Resultado da multiplicação: ". multiplicacaoR(5, 7);
        pulaLinha(0);
        echo "Resultado da Divisão: ". divisaoR(5, 5);
        pulaLinha(0);
        echo escreva_texto3("--------------------------------------");
        pulaLinha(0);
        echo escreva_texto3("------ Passagem por Valor -----------");
        pulaLinha(0);
        echo "Valor direto: " . somaR(5, 7); 
        pulaLinha(0);
        $num1 = 5;
        $num2 = 7;
        echo "Valor por variável: ". somaR($num1, $num2); 
        pulaLinha(0);
        echo "Qual é o valor: ". $num2; 
        pulaLinha(0);
        echo escreva_texto3("------ Passagem por Referência -----------");
        pulaLinha(0);
        echo "Valor direto: " . somaR(5, 7); 
        pulaLinha(0);
        $num1 = 5;
        $num2 = 7;
        echo "Valor por variável: ". somaR2($num1, $num2); 
        pulaLinha(0);
        echo "Qual é o valor: ". $num2; 
        pulaLinha(0);


        ?>
        </pre>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>