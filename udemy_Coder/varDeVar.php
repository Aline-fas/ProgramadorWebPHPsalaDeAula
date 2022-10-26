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
        <?php
            // $a = "Aline";
            // $$a = "Fernandes";

            // echo "$a {$$a} ${$a} $Aline <br>";

            // $epa = 'opa';
            // $opa = 'vish';

            // echo "$epa $opa ";

            // Atribuição por valor e por referência
            // por valor = copia. O conteúdo de uma variável será copiado para outra variável
            // Por referência=o conteúdo das 2 variáveis será o mesmo. Ou seja, se eu alterar uma das variáveis automaticamente a outra também será modificada.

            // por valor / copia
            $a = 'Aline';
            $b = $a;

            echo "$a $b";
            
            // por referencia
            $c = 'Fernandes';
            $d = &$c;
            $d = 'Amaro';

            echo "$c $d";

           
    </div>
</body>
</html>