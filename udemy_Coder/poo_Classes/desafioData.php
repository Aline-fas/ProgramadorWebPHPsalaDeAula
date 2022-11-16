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
            class Data {
                public $dia = '01';
                public $mes = '01';
                public $ano = 1970;

                public function setData($dia,$mes,$ano){
                    $this->dia = $dia;
                    $this->mes = $mes;
                    $this->ano = $ano;
                }

                public function apresentar(){
                    return "Data: {$this->dia}/{$this->mes}/{$this->ano}<br>";
                }
            }

            $h = new Data();
            echo $h->apresentar();

            $h->dia = 15;
            $h->mes = 12;
            $h->ano = 1996;
            echo $h->apresentar();

            $aniversario = new Data();
            $aniversario->dia = 28;
            $aniversario->ano = 1965;
            echo $aniversario->apresentar();
            
            $h->setData(18,11,2025);
            echo $h->apresentar();
            
        
            ?>
    </div>
</body>
</html>