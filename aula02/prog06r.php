<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">    
    <title>Senac - Curso de PHP</title>
</head>
<body>
    <div>
        <p>
            Escreva um programa  que leia um número.
            O programa deverá verificar se o
            mesmo é positivo ou negativo. 
            Se o número for positivo, o programa deverá verificar se o numero 
            é maior que 10, casos seja, imprimir válido.
        </p>
        <hr/>
        <h2 style="text-align: center">positivo ou negativo.</h2>        
        <fieldset>
            <legend>Numero verificado</legend>
            <?php
                $numero = $_GET["n"];
                
                //Desvio condicional
            
                if ($numero > 0) {
                    echo "<h1 style='text-align: center'>Positivo</h1>";
                     if ($numero > 10 ) {
                        echo "<h1 style='text-align: center'>Valido</h1>";
                        } 
                    } else  {
                         echo "<h1 style='text-align: center'>Negativo</h1>";
                    }
                
            ?>
        <br>
        </fieldset>
        <br>
        <br>
        <a href="prog06.php">Voltar</a>
        
</div>
</body>
</html>