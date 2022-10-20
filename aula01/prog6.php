<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo.css"/>
    <title>Senac - Curso de PHP</title>
</head>
<body>
<div>
<p>
	Escreva um programa que leia o nome, a idade e o sexo de uma pessoa.
	O programa deverá imprimir as informações lidas.
	</p>
    <h3>Cadastro de Usuário</h3>
    <!-- action = Ação - página para aonde vai, method = método de envio-->
    <form action="prog6r.php" method="post">
        Login:<br>
        <input type="text" name="login"><br>
        senha: <br>
        <input type="password" name="senha"><br>
        Perfil: <br>
        <select name="perfil" id="">
            <option value="admin" >Administrador</option>
            <option value="user" >Usuário</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Salvar">
        </form>
</div>
</body>
</html>