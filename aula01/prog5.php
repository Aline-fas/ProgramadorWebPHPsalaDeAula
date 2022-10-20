<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <link rel="stylesheet" href="css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Senac - Curso de PHP</title>
</head>
<body>
<div>
	<p>
	Escreva um programa que leia o nome, a idade e o sexo de uma pessoa.
	O programa deverá imprimir as informações lidas.
	</p>

        <?php 
        $nome = $_GET["nome"];
        $idade = $_GET["idade"];
        $sexo = $_GET["sexo"];

        echo "O seu Nome: ". $nome .", a sua idade é: ". $idade . ", do sexo: ". $sexo;
        ?>

    <br/>
    <br/>
    <a href="index.php"><h3>Voltar</h3></a>
</div>
</body>
</html>