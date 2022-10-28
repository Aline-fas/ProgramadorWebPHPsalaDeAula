<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css" />
    <title>Senac - Curso de PHP</title>
     
</head>

<body>
    <div> 
       <?php

       require_once "desafio_cpf_funcoes.php";

       $nome = $_POST["nome"];
       $cpf = $_POST["cpf"];
       $email = $_POST["email"];
       $telefone = $_POST["telefone"];

       if(verifica_cpf($cpf)){

           
           echo "Nome: " . $nome;
           echo "<br>CPF: " . $cpf;
           echo "<br>E-mail: " . $email;
           echo "<br>Telefone: " . $telefone;

           //Informação local
           date_default_timezone_set("America/Sao_Paulo");

           $arquivo = fopen("dados.txt", "a+"); //Abre o arquivo 

           //escrevendo no arquivo
           fwrite($arquivo, "Dados do Aluno - Cadastro realizado em: ". date("d/mY"). "as" . date("H:i:s"));
           fwrite($arquivo, "\nNome:" . $nome);
           fwrite($arquivo, "\nCPF:" . $cpf);
           fwrite($arquivo, "\nE-mail:" . $email);
           fwrite($arquivo, "\nTelefone:" . $telefone);
           fwrite($arquivo, "\n------------------------------------------\n\n");
           fclose($arquivo); // fecha o arquivo

        }else {
            echo "<br><h2 style='text-align: center;'> $cpf <br>Invalido .</h2>";
        }


       ?>
       <a href="desafios_cpf.php">
        <i class="bi bi-reply" style="font-size: 2rem; color: cornflowerblue;"></i> 
        </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>