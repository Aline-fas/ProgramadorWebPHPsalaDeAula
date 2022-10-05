<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Senac - Curso de PHP</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div>
        <p>
            Escreva um programa que leia o nome, a idade e o sexo de uma pessoa. O programa deverá imprimir as informações lidas.

        </p>
        <h3>Cadastro de Usuário</h3>
               <!-- action = para onde var /  method é o metodo de envio -->

        <?php
        
        $login = $_POST["login"];
        $senha = $_POST["senha"];
        $perfil = $_POST["perfil"];

        echo "<h3>Informações do usuário</h3>";
        echo "Login: $login, senha: $senha, Perfil: $perfil"

        ?>
        <br>
        <a href="prog06.php"> <h3>Voltar</h3></a>
    </div>
</body>
</html>