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

            class Pessoa{
                public $nome;
                public $idade;

                function __construct($novoNome, $idade = 18){
                    echo 'Construtor invocado <br>';
                    $this->nome = $novoNome;
                    $this->idade = $idade;
                }
                function __destruct(){
                    echo 'E morreu!<br>';
                }
                function apresentar(){
                    echo "{$this->nome}, {$this->idade} anos.<br>";
                }
            }

            $pessoaA = new Pessoa('Rebeca');
            $pessoaA-> apresentar();
            unset($pessoaA);

            $pessoaB = new Pessoa ('Pedro',23);
            $pessoaB-> apresentar();
            $pessoaB = null;
            
            
            ?>
    </div>
</body>
</html>