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
            1) Escreva um programa que leia 
            o preço de um produto.

            O programa deverá calcular um desconto 
            de 10% na compra a vista.

            O programa deverá calcular um acrescimo 
            de 15% na compra parcelada.

            O programa deverá calcular o valor
            da parcela em até 10 vezes.

            O programa deverá imprimir todos
            os valores calculados.

            O programa deverá calcular o valor a ser pago.
        </p>
        <hr/>
        <h2 style="text-align: center">Informações dos Produtos</h2>
        <fieldset>
            <legend>Dados do Produto</legend>
            <form action="prog01r.php" method="get">
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