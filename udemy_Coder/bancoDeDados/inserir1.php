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

          $sql = "INSERT INTO cadastro

            (nome, nascimento, email, site, filhos, salario)
            VALUES (
                'Gilberto', 
                '1965-02-06', 
                'gilberto@email.com', 
                'https://www.gilberto.com', 
                4, 
                5649.55
            )";
            
            $conexao = novaConexao();
            $resultado = $conexao->query($sql); 

            if ($resultado){
                echo "Sucesso:)";
            }else {
                echo "Erro:" . $conexao->error;
            }
            $conexao->close(); 
        ?>
    </div>
</body>
</html>