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
            echo "<h2>Passagem por valor</h2>";
            
                function valor ($x){
                    $x += 2;
                    echo "O valor de X é ".$x;
                }
                $a = 3;
                valor ($a); //passa o valor de $a para dentro do parametro teste na linha 17 
                echo "<br>O valor de A é $a";

                // na passagem por valor, qualquer alteração na variavel $x, não altera a variavem $a

            echo "<h2>Passagem por referência</h2>";    
                function referencia(&$y){ //& é uma referencia a variavel $y apenas
                $y += 2;
                echo "O valor de Y é  $y";
                }

                $b = 3;
                referencia ($b);
                echo "<br>O valor de B é  $b";

                // na passagem por referencia, qualquer alteração na variavel $y, altera tambem a variavem $b
        
            ?>
        
    </div>
</body>
</html>