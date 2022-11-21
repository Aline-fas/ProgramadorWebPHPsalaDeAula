<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            require_once "criandoConexao.php";

            // selecionando todos os registros da tabela cadastro
            $sql = "SELECT id, nome, nascimento, email FROM cadastro"; //selecionando id nome nasc e email da tabela cadastro

            $conexao = novaConexao();
            $resultado = $conexao->query($sql);

            $registros = []; // o resultado da consulta sera armazenado nesse array
            
            // se o numero de linhas de registro for maior que 0 ...
            if ($resultado->num_rows > 0 ){ 
                while ($row = $resultado->fetch_assoc()){
                    //fetch_assoc é um array chave/valor onde chave é o nome da coluna 
                    //e valor corresponde ao valor daquela linha na tabela 
                    //ex: chave vai ser id1...
                    $registros [] = $row; //Adicionando cada array associativo de row dentro de array registros

                }
            }elseif($conexao->error){
                echo "Erro: " . $conexao->error;
            }

            // print_r($registros);
            $conexao->close();

        ?>

        <table class= "table table-hover ">
            <thead> <!-- cabecalho da tabela  -->
                <th>Código</th>
                <th>Nome</th>
                <th>Nascimento</th>
                <th>Email</th>
            </thead>

            <tbody>
                <?php foreach($registros as $registro): ?>
                    <tr>
                        <td><?= $registro['id'] ?></td>
                     <td> <?= $registro ['nome'] ?></td>
                     <td> 
                        <?= 
                            date ('d/m/Y',strtotime($registro['nascimento'] )) // organizando a data no formato brasileiro
                        ?>
                    </td>
                     <td> <?= $registro ['email'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <style>
            .table {
                font-size: 1.0rem;
                
            }
            div::before {
                width: 550px;
            }
        </style>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</body>
</html>