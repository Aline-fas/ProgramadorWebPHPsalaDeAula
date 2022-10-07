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
            <legend>Verificando idade </legend>
    <?php
        $nascimento = $_GET["n"];
        $idade = 2022 - $nascimento;
        
        if ($idade >= 18 &&  $idade <= 65) {
           
            echo "<h1 style = 'text-align: center'> Você nasceu em $nascimento. <br> Sua idade é $idade. 
            Parabéns! Você já pode votar. </h1>";
        } elseif ($idade > 65 || $idade < 18 && $idade >=16 ){
            echo "<h1 style = 'text-align: center'> Você nasceu em $nascimento. 
            <br> Sua idade é $idade. Seu voto é opcional. </h1>";
        }
        else {
            echo "<h1 style = 'text-align: center'> Você nasceu em $nascimento. Sua idade é $idade. 
            Infelizmente você não pode votar.</h1";
        }
    ?>
    <br>
    <br>
    <a href="exe08.php">Voltar</a>
    </fieldset>
    </div>
</body>
</html>