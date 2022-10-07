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
        $idade = date ("Y") - $nascimento;
        

        // O exercicio pode ser resolvido dessa forma:


        if ($idade >= 18 &&  $idade <= 65) {
           
            echo "<p style = 'text-align: center'> Você nasceu em $nascimento. <br> Sua idade é $idade. <br> Parabéns! Você já pode votar. </p>";
        } else {
            echo "<p style = 'text-align: center'> Você nasceu em $nascimento. Sua idade é $idade. <br> Infelizmente você não pode votar.</p>";
        }


        // O exercicio pode ser resolvido dessa forma :


        // if ($idade >= 18) {
        //     $vota = "pode votar"; 
        //     $dirige = "pode dirigir";
        // } else {
        //     $vota =  "não pode votar";
        //     $dirige =  "não pode dirigir";
        // }

        // echo "Com essa idade você $vota e $dirige."
    ?>
    </div>
    </fieldset>
</body>
</html>