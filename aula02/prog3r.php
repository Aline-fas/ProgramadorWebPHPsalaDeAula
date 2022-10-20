<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Senac - Curso de PHP</title>
</head>
<body>
<div>
<p>Desvio condicional composto (DCC)

É quando uma pergunta tem duas ou mais possíveis respostas.

Escreva um programa que leia um número.
O programa deverá verificar se o número
é par ou impar.

10 / 2 = 5; resto = 0;

% mod --> é um operador que retorna o resto de uma divisão.

10 % 2 = 0;

9 % 2 = 1;
    </p>
    <hr/>
    <h2 style="text-align: center">Informações dos Produtos</h2>
    <fieldset>
        <legend>Dados do Produto</legend>
    <?php
        $numero = $_GET["n"];
        $resto = $numero % 2; //% = modulo é o resto da divisão

        //Desvio condicional composto
        if($resto == 0){
           echo "<h1  style='text-align: center'>Par!</h1>";
        } else {
            echo "<h1 style='text-align: center'>Impar!</h1>";
        }

    ?>
    <br>
    </fieldset>
    <br>
    <br>
	<a href="prog3.html">Voltar</a>
    
</div>
</body>
</html>