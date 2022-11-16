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

                function __construct($novoNome,$idade){
                    $this->nome = $novoNome;
                    $this->idade = $idade;
                    echo 'Pessoa diz: Pessoa criada!<br>';
                }

                function __destruct(){
                    echo '<br>Pessoa diz:Tchau...';
                }

                function apresentar(){
                    echo "Nome: {$this->nome}, Idade: {$this->idade}";
                    
                }

            }
 
            // Usuario é subclasse e Pessoa é superclasse
            // tudo que Pessoa tem, Usuario tem. mas o que usuario tem, pessoa nao tem
            class Usuario extends Pessoa {
                public $login;

                function __construct($novoNome,$idade,$login){
                    // $this->nome = $novoNome;
                    // $this->idade = $idade;
                    parent::__construct($novoNome,$idade);
                    $this->login = $login;
                    echo 'Usuario criado!<br>';
                }
                function __destruct (){
                    parent::__destruct();
                    echo '<br>Usuario diz: Tchau...';
                }
                public function apresentar(){
                    echo "@{$this->login} ";
                    parent::apresentar(); //chamou a funçao apresentar da classe pessoa 
                }
            }           

            $usuario1 = new Usuario ('Vivi',10,'vivi_fas');
            $usuario1->apresentar();
            unset($usuario1);
            ?>
    </div>
</body>
</html>