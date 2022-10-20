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
<p>Escreva um programa que leia 3 números.</p>

<p>O programa deverá verificar qual o 
maior entre os 3.</p>

<p>Operadores  lógicos
São operadores responsaveis por unir perguntas.</p>

<p>And (&&) --> ele retorna verdadeiro quando todas 
as condições testadas forem verdadeiras.</p>

<p>Or (||) --> ele retorna verdadeiro quando pelo
menos uma condição testada for verdadeira.
    </p>
    <hr/>
    <h2 style="text-align: center">Informações dos Produtos</h2>
    <fieldset>
        <legend>Dados do Produto</legend>
    <?php
        $a = $_GET["n1"];
        $b = $_GET["n2"];
        $c = $_GET["n3"];
        
        //Desvio condicional composto
    if($a > $b && $a > $c){
        echo "<h1 style='text-align: center'>O primeiro é o maior!</h1>";
    } else if($b > $a && $b > $c) {
        echo "<h1 style='text-align: center'>O segundo é o maior!</h1>";
    } else {
        echo "<h1 style='text-align: center'>O terceiro é o maior!</h1>";
    }

    ?>
    <br>
    </fieldset>
    <br>
    <br>
	<a href="prog6.html">Voltar</a>
    
</div>
</body>
</html>