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
            function soma ($a, $b) {
                $s = $a + $b;
                echo "<p> A soma entre $a e $b vale $s </p>";
            }

            soma (3,4);
            soma (8,2);
            $x = 9;
            $y = 15;
            soma ($x,$y);




        // function soma ($a,$b){
        //     $s = $a + $b;
        //     echo "<p>A soma entre $a + $b = $s</p>";
        // }
        // soma (3,4);
        // soma (14,1);
        // $x = 9;
        // $y = 15;
        // soma ($x,$y);

        ?>
    </div>
</body>
</html>