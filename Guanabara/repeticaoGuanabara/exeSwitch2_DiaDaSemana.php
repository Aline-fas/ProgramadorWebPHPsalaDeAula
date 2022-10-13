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
        <p>
            Mostrando as responsabilidades da semana com Switch.
        </p>

        <?php
        $dds = isset ($_GET["Dia"])?$_GET["Dia"]:0;

        switch ($dds){
            
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                $rotina = " dia de estudar e (ou) trabalhar.";
                
                echo "Hoje é $rotina";

                break;

            case 1: 
            case 7:
                $rotina = "dia de descanso.";
                
                echo "Hoje é $rotina";

                break;

            default:
                echo "Digite um número válido.";
        }
        
        ?>
        <br>
        <a href="exeSwitch2_DiaDaSemana.html">Voltar</a>
    </div>
</body>
</html>