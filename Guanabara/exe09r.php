<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">    
    <title>Document</title>
</head>
<body>
    <div>
    <fieldset>
            <legend>Verificando média do aluno </legend>
    <?php
        $nota1 = $_GET ["n1"];
        $nota2 = $_GET["n2"];
        $media = ($nota1 + $nota2)/ 2;
        
        echo "A média entre $nota1 e $nota2 é igual a $media. <br> <br>";

        if ($media >= 7) {
            
            $situação ="APROVADO";
        } elseif ($media >= 5 && $media <7 ){
            $situação ="em RECUPERAÇÃO";
        } else {
            $situação ="REPROVADO";
        }
        echo "O aluno está $situação.";
    ?>
    <br>
    <br>
    <a href="exe09.php">Voltar</a>
    </fieldset>
    </div>
</body>
</html>