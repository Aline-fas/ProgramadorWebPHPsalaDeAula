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

            $registros = [];
            $conexao = novaConexao();
            if ($_GET['excluir']){
                $excluirSQL = "DELETE FROM cadastro WHERE id = ?";
                $stmt = $conexao->prepare($excluirSQL);
                $stmt->bind_param("i", $_GET['excluir']);
                $stmt->exeute();
            }

            $sql = "SELECT * FROM cadastro";
            $resultado =  $conexao->query($sql);

            if($resultado->num_rows >0){
                while ($row = $resultado->fetch_assoc()){
                    $registros[] = $row;
                }
            }elseif ($conexao->error){
                echo "Erro: " . $conexao->error;
            }
            
            $conexao->close();

        ?>

        <table class= "table table-hover ">
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Nascimento</th>
                <th>Ações</th>
            </thead>
            <tbody>
                <?php foreach ($registros as $registro): ?>
                    <tr>
                        <td> <?= $registro ['id'] ?> </td>
                        <td> <?= $registro ['nome'] ?> </td>
                        <td> <?= $registro ['email'] ?> </td>
                        <td> 
                            <?= 
                            date ('d/m/Y', strtotime ($registro ['nascimento'])) 
                            ?> 
                        </td>
                        <td>
                        <!-- <a href="excluirCliente.php?id=<?=$cliente["idcliente"]; ?>">[EXCLUIR]</a> -->
                            <a href="excluirRegistro2.php?id<?=$registro['id'];?>" class=  "btn btn-danger">
                            excluir
                            </a> 
                        </td>
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
            .btn {
                height: 40px;
                padding-top: 4px;
            }
        </style>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</body>
</html>