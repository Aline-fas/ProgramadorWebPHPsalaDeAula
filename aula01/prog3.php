<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <link rel="stylesheet" href="css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Senac - Curso de PHP</title>
</head>
<body>
<div>
	<br/>
    <p>
    Escreva um programa que imprima a soma de dois números.
    </p><br/>
	
    <?php
		//Declaração de variável
		$num1;
		//Atribuição de valor a variável
		$num1 = 10;
		//Declarando a variável e atribuindo valor.
		$num2 = "5"; //Variável do tipo string
        //Soma realizada com sucesso, mesmo sendo uma das variáveis string
        $total = ($num1 + $num2);
		echo "A soma de ".$num1." + ".$num2." = ". ($num1 + $num2);
		echo "<br>A soma de ".$num1." + ".$num2." = ". $total;
    ?>
    <br/>
    <br/>
    <a href="index.php"><h3>Voltar</h3></a>
</div>
</body>
</html>