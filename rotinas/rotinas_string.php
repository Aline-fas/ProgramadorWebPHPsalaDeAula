<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css" />
    <title>Senac - Curso de PHP</title>
</head>

<body>
    <div>



        <h1 style="text-align: center;">
            Procedimentos, Funções e Métodos.
        </h1>
        <h4 style="text-align: center;">Funções com String</h4>
        <hr>
        <br>
        <?php
        
        require_once "funcoes_string.php";

        echo "Teste de quebra de linha com wordrap";
        pulaLinha(0);
        $texto = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit perferendis voluptate, dolores quis dicta nulla quas doloremque! Iure explicabo sed vel error, in ipsa voluptatem nostrum atque assumenda, exercitationem neque!";
        $resposta = wordwrap($texto,30,"<br>",true);
        echo $resposta;
        pulaLinha(2);

        echo "Quantidade de letras no texto com a função strlen " . strlen($texto);
        pulaLinha(2);

        echo "Utilização dotrin() - para remoção de espaços";
        $nome = "   Line  Fer   ";
        pulaLinha(0);
        echo $nome;
        pulaLinha(0);
        echo "Quantidade de letras: " . strlen($nome);
        pulaLinha(0);
        echo "Quantidade de letras depois do trim(): " . strlen(trim($nome));



        ?>
        

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>