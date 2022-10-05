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
            2) Estrutura condicional

            Representa um fluxo alternativo 
            na execução do programa.

            Desvio condicional simples (DCS)
            É quando uma pergunta tem
            somente uma unica resposta.

            Escreva um programa que leia o preço de um
            produto.

            O programa deverá calcular um desconto de 
            10% somente se o preco do produto for maior
            de 100.
        </p>
        <hr/>
        <h2 style="text-align: center">Informações dos Produtos</h2>
        <fieldset>
            <legend>Dados do Produto</legend>
        <?php
            $valor = $_GET["valor"];
            $qtd = $_GET["qtd"];

            $desconto = 0;

            //Desvio condicional
        
            if ($valor > 100) {
                $desconto = ($valor * 10) /100; // ou $valor*.10;
            }  
            echo "Desconto: R$" .number_format ($desconto, 2, ",",".");
            echo "<br> Valor com desconto: R$ " .number_format ($valor - $desconto, 2, ",",".");
            
        ?>
        <br>
        </fieldset>
        <br>
        <br>
        <a href="prog02.php">Voltar</a>
        
</div>
</body>
</html>