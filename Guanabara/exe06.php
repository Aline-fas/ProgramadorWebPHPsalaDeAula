<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <div>
    <fieldset>
            <legend>Verificando preço do produto </legend>
        <?php
            // $produto = $_GET["0"];
            $produto = $_GET["p"];
            $preco = $produto * .9 ;

            echo "<h1> O preço do produto é R$ $produto. </h1>";
            echo "Você ganhou um desconto de 10% e pagará R$ $preco nessa compra."

        ?>
          </fieldset>
    </div>
</body>
</html>