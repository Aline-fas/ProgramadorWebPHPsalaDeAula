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
        <!-- action = para onde vai /  method é o metodo de envio -->
        <form action="prog06r.php" method="post">
            Login: <br>
            <input type="text" name="login"> <br>
            Senha: <br>
            <input type="password" name="senha"> <br>
            Perfil <br>
            <select name="perfil" id="">
                <option value="admin">Administrador</option>
                <option value="admin">Usuario</option>
            </select>
            <br>
            <br>
            <input type="submit" value="Salvar">
            </form>
    <a href="http://localhost/aula01/"><h3>Voltar</h3></a>

    </div>
</body>
</html>