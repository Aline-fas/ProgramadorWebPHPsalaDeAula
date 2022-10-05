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
            Escreva um programa que leia
            o preço e a quantidade de produtos comprados.

            O programa deverá calcular um desconto de
            10% no valor total a ser pago se o
            valor do produto for maior que 300.

            O programa deverá calcular um 
            desconto de 7% no valor total 
            a ser pago se o número de produtos
            comprados for maior que 5.

            O programa deverá calcular e imprimir o valor
            total a ser pago com os possíveis descontos.
        </p>
        <hr/>
        <h2 style="text-align: center"> preço e a quantidade</h2>
        <fieldset>
            <legend>Dados do Produto</legend>
            <form action="prog05r.php" method="get">
                Valor:<br/>
                <input type="text" name="valor" placeholder="Digite o Valor do Produto"/>
                <br/>
                Quantidade:<br/>
                <input type="number" name="qtd" min="1" placeholder="Digite a Quantidade"/>
                <br/>
                <input type="submit" value="Enviar"/>
            </form>
        </fieldset>
    </div>
</body>
</html>