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
        Desvio condicional composto (DCC)

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
        <h2 style="text-align: center">Par ou Impar</h2>
        <fieldset>
            <legend>Número Digitado</legend>
            <form action="prog03r.php" method="get">
                Valor:<br/>
                <input type="text" name="n" placeholder="Digite um número "/>
                <br/>
                
                <input type="submit" value="Enviar"/>
            </form>
        </fieldset>
    </div>
</body>
</html>