<!DOCTYPE html>
<?php
    require_once "conexao.php";

    if(isset($_POST["email"]) || isset($_POST["senha"])){
        if (strlen($_POST["email"])==0){
            echo "Preencha seu e-mail!";
        }elseif (strlen($_POST["senha"]==0)){
            echo "Preencha sua senha!";
        } else {
            //real_escape_string() = função que retorna string sem caracteres especiais
            $email = $conexao-> real_escape_string($_POST["email"]);
            $senha = $conexao-> real_escape_string($_POST["senha"]);

            $sql_code = " select * from usuario where login = '$email' and senha = '$senha'";
            $sql_query = $conexao->query($sql_code) or die("Falha na execução do codigo SQL:" . $conexao->error);
            
            $qtd = $sql_query->num_rows;

            if ($qtd ==1){
                $usuario = $sql_query->fetch_assoc();

            if (!isset($_SESSION)){
                session_start();
            }

                // $_SESSION['user'] = $usuario;
                $_SESSION['id'] = $usuario["id"];
                $_SESSION['nome'] = $usuario["nome"];
                header("Location:login.php");
            } else {
                echo "Falha ao logar! E-mail ou senha incorretos";
            }
        }
    }
?>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css" />
    <title>Senac - Curso de PHP</title>
    <script>
        function validar(){
            var msg = "";
            var flag = 0;

            // if (f.nome.value ==""){
            //     flag = 1;
            //     msg = "Preencha o campo Nome!";
            // }
            // if (f.cpf.value ==""){
            //     flag = 1;
            //     msg = msg + "<br>Preencha o campo CPF!";
            // }
            if (f.email.value ==""){
                flag = 0;
                msg = msg + "<br>Preencha o campo E-mail!";
            }
            if (f.senha.value ==""){
                flag = 1;
                msg = msg + "<br>Preencha o campo senha!";
            }
            if (flag == 0){
                document.getElementById("resposta").style.display = 'none';
                return true;
            }else {
                document.getElementById("resposta").style.display = 'block';
                document.getElementById("resposta").innerHTML = msg;
                return false;
            }
        }
        function mascara (i){
            // console.log(i);
            // console.log(i.value);
            var v = i.value;

            if(isNaN(v[v.length -1])){
                i.value = v.substring(0, v.length -1);
                return;
            }
            i.setAttribute("maxlength", 14);
            if(v.length == 3|| v.length == 7) {i.value += ".";} 
            if (v.length == 11) i.value += "-";
        }
    </script>
</head>

<body>
    <div>

        <h3 style="text-align: center;">
            Entrar
        </h3>
        <hr>
        <br>


        <section id = "resposta" class="alert alert-danger" role="alert" style = "display:none;">
        
        </section>
        <form action="" method="post">
        <br>
            <label class="form-label">E-mail:</label>
            <input type="email" name="email" class="form-control">

            <label class="form-label">Senha:</label>
            <input type="password" name="senha" class="form-control">
            <br>
            <input type="submit" value="Entrar" class="btn btn-primary">
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>