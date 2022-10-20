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
<p>Escreva um programa que leia um número.

O programa deverá verificar se o número
é positivo ou negativo.

Se o número for positivo o programa deverá verificar
se o número é maior que 10, caso seja imprimir valido.
    </p>
    <hr/>
    <h2 style="text-align: center">Informações dos Produtos</h2>
    <fieldset>
        <legend>Dados do Produto</legend>
    <?php
        $numero = $_GET["n"];
        
        //Desvio condicional composto
        
        if($numero > 0){
           echo "<h1  style='text-align: center'>Positivo!</h1>";
           if($numero > 10){
               echo "<h1  style='text-align: center'>Valido!</h1>";
           }
        } else {
            echo "<h1 style='text-align: center'>Negativo!</h1>";
        }
        
        /*
        if($numero > 0){
           echo "<h1  style='text-align: center'>Positivo!</h1>";
        } 
        else {
        }
        if($numero < 0){
            echo "<h1 style='text-align: center'>Negativo!</h1>";
        } else {
            echo "<h1 style='text-align: center'>Neutro!</h1>";
        }
        if($numero >10){
            echo "<h1  style='text-align: center'>Valido!</h1>";
        }  
        */
        /*
        if($numero > 0){
            if($numero >10){
                echo "<h1  style='text-align: center'>Valido!</h1>";
            } else{
            }  
            echo "<h1  style='text-align: center'>Positivo!</h1>";
        }else {
            echo "<h1 style='text-align: center'>Negativo!</h1>";
     }
     */

        // condição ? verdadeiro : falso;
    //    echo (($numero >0) ? "<h1  style='text-align: center'>Positivo!</h1>" : "<h1 style='text-align: center'>Negativo!</h1>");

    ?>
    <br>
    </fieldset>
    <br>
    <br>
	<a href="prog6.html">Voltar</a>
    
</div>
</body>
</html>