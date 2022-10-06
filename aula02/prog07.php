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
            Se o número for positivo, o programa deverá verificar se o número 
            é maior que 10, casos seja, imprimir válido.

        </p>
        <hr/>
        <h2 style="text-align: center">Verificando o maior número </h2>
        <fieldset>
            <legend>Verificando o maior número </legend>
            <form action="prog07r.php" method="get">
                Valor:<br/>
                <input type="text" name="n1" placeholder="Digite um número "/>
                <br/>
                Valor:<br/>
                <input type="text" name="n2" placeholder="Digite um número "/>
                <br/>
                Valor:<br/>
                <input type="text" name="n3" placeholder="Digite um número "/>
                <br/>
                
                <input type="submit" value="Enviar"/>
            </form>
        </fieldset>
    </div>
</body>
</html>