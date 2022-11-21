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

            // DDL - Data Definition Lang.

            $sql = "CREATE TABLE IF NOT EXISTS cadastro (
                -- colunas

                -- tamanho inteiro 6 sem sinal ...
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                nome VARCHAR (100) NOT NULL,
                nascimento DATE,
                email VARCHAR (100) NOT NULL,
                site VARCHAR (100) NOT NULL,
                filhos INT,
                salario FLOAT
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