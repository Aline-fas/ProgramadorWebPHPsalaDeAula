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
<p>Escreva um programa que leia um numero.
<br/>
O programa deverá verificar se o numero
é valido.
<br/>
Numero válido está entre 0 e 10.
<br/>
O programa deverá imprimir 
valido ou invalido.
<br/>
Operadores condicionais<br/>
< menor<br/>
> maior<br/>
<= menor igual<br/>
>= maior igual<br/>
<> diferente de <br/>
!= não igual há<br/>
== igual<br/>
=== idêntico
    </p>
    <hr/>
    <h2 style="text-align: center">Informações dos Produtos</h2>
    <fieldset>
        <legend>Dados do Produto</legend>
    <?php
        $numero = $_GET["n"];
        
        //Desvio condicional composto
        if($numero < 0 || $numero > 10){
            echo "<h1 style='text-align: center'>Invalido!</h1>";
        }else {
            echo "<h1 style='text-align: center'>Valido!</h1>";
        }
        
        if($numero >= 0 && $numero <= 10){
            echo "<h1 style='text-align: center'>Valido!</h1>";
        }else {
            echo "<h1 style='text-align: center'>Invalido!</h1>";
        }
       
    ?>
    <br>
    </fieldset>
    <br>
    <br>
	<a href="prog8.html">Voltar</a>
    
</div>
</body>
</html>