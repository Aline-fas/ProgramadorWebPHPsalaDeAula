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
        Escreva um programa que leia um numero.
<br/>
O programa deverá verificar se o numero
é valido.
        </p>
        <hr/>
        <h2 style="text-align: center">positivo ou negativo.</h2>        
        <fieldset>
            <legend>Numero verificado</legend>
            <?php
                $numero = $_GET["n"];
                
                //Desvio condicional
            
                // if ($numero >= 0 && $numero <= 10) {
                // echo "<h1 style='text-align: center'>Valido</h1>";
                 
                // } else  {
                //      echo "<h1 style='text-align: center'>Invalido</h1>";
                //     }
                    // ou
                if ($numero < 0 || $numero > 10) {
                echo "<h1 style='text-align: center'>Invalido</h1>";
                 
                } else  {
                     echo "<h1 style='text-align: center'>Valido</h1>";
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