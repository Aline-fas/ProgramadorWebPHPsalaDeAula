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
<p>1) Escreva um programa que leia 
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
    <?php
        $valor = $_GET["valor"];
        $qtd = $_GET["qtd"];

        $total = $valor * $qtd ;
        $desconto = $total * 10 / 100 ;
        $acrescimo = $total * .15;
        $valor_a_vista = $total - $desconto;
        $valor_total_parcelado =  $total + $acrescimo;
        $valor_parcelas = $valor_total_parcelado / 10;
    
        echo "*******************Formas de Pagamento *******************<br>";
        echo "Valor do Produto: R$ ". number_format($total, 2, ",",".");
        echo "<br>Valor de Desconto pagando a vista: R$ ". number_format($desconto, 2, ",",".");
        echo "<br>Valor do produto a vista: R$ ". number_format($valor_a_vista, 2, ",",".");
        echo "<br>Valor acrescido em Pagamento parcelado: R$ ". number_format($acrescimo, 2, ",",".");
        echo "<br>Valor das 10 parcelas: R$ ". number_format($valor_parcelas, 2, ",",".");
        echo "<br>Valor total parcelado: R$ ". number_format($valor_total_parcelado, 2, ",",".");
        
    ?>
    <br>
    </fieldset>
    <br>
    <br>
	<a href="prog01.php">Voltar</a>
    
</div>
</body>
</html>