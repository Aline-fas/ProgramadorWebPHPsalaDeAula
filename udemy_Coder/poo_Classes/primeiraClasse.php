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
            class Cliente {
                // atributos 
                public $nome =  'Anônimo';
                public $idade = 18;

                //metodos (função)
                public function apresentar(){
                    //this aponta para o objeto
                    echo "Nome: {$this->nome} Idade: {$this->idade}<br>";
                }

            }
            
            //criando o objeto
            $c1 = new Cliente();
            $c1->apresentar();
            
            $c2 = new Cliente();
            $c2->nome = 'Ana';
            $c2->idade = 27.5;
            echo $c2->nome . "<br>";//acessando um atributo especifico
            $c2->apresentar();
            
            $c3 = new Cliente();
            $c3->nome = 'Gabriel';
            $c3->idade = 22;
            
            $c4 = new Cliente();
            $c4->nome = 'Junior';
            $c4->idade = 45;


            $c3->apresentar();
            $c4->apresentar();
            ?>
    </div>
</body>
</html>