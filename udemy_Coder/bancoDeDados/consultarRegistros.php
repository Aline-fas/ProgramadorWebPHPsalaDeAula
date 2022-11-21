<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            require_once "criandoConexao.php";

            // selecionando todos os registros da tabela cadastro
            $sql = "SELECT * FROM cadastro";

            $conexao = novaConexao();
            $resultado = $conexao->query($sql);

            $registros[]; // o resultade da consulta sera armazenado nesse array
            
            // se o numero de linhas de registro for maior que 0 ...
            if ($resultado->num_rows >0 ){
                while ($row = $resultado->fetch_assoc()){

                }
            }elseif($conexao->error){
                echo "Erro: " .$conexao->error;
            }
        ?>
    </div>
</body>
</html>