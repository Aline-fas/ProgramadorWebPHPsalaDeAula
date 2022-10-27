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



        <h1 style="text-align: center;">
            Procedimentos, Funções e Métodos.
        </h1>
        <h4 style="text-align: center;">Funções com String</h4>
        <hr>
        <br>
        <?php
        
        require_once "funcoes_string.php";

        echo "Teste de quebra de linha com wordwrap";
        pulaLinha(0);
        $texto = "Lorem, ipsum dolor sitametconsectetur adipisicing elit. Illo laboriosam similique error dolore necessitatibus aut alias nam ipsam eaque voluptas itaque eos, voluptate repellat ipsa ex nesciunt, expedita reprehenderit quod.";
        // $resposta = wordwrap($texto, 10, "<br>", false); //Quebra por palavra
    // $resposta = wordwrap($texto, 10, "<br>", true);//quebra por letras
        $resposta = wordwrap($texto, 60, "<br>");
        echo $resposta;
        pulaLinha(2);
        
        echo "Quantidade de  letras no texto com a função strlen: ". strlen($texto); 
        pulaLinha(2);
        
        echo "Utilização do: trim() - para remoção de espaços...";
        $nome = "     Marcio de Oliveira Velasco   ";
        pulaLinha(0);
        echo $nome;
        pulaLinha(0);
        echo "Quantidade de letras: " . strlen($nome);
        pulaLinha(0);
        $nome_sem_espacos = trim($nome);
        echo "Quantidade de letras depois do trim(): " .
         strlen($nome_sem_espacos);
        pulaLinha(0);
        echo "Quantidade de letras depois do trim(): " .
        strlen(ltrim($nome));
        pulaLinha(0);
        echo "Quantidade de letras depois do trim(): " .
        strlen(rtrim($nome));
        pulaLinha(2);

        echo "Quantidade de palavras em uma string com: str_word_count()";
        pulaLinha(0);
        $teste = str_word_count($nome, 0);
        echo "Qtd de palavras - com a opção: 0: " . $teste;
        pulaLinha(0);
        $teste = str_word_count($nome, 1);
        echo "Qtd de palavras - com a opção: 1: ";
        print_r($teste);
        pulaLinha(0);
        $teste = str_word_count($nome, 2);
        echo "Qtd de palavras - com a opção: 2: ";
        print_r($teste);
        pulaLinha(2);
        
        echo "Função explode()";
        $data_nascimento = "15/12/1978";
        $vetor = explode("/", $data_nascimento);
        pulaLinha(0);
        print_r($vetor);
        pulaLinha(2);

        echo "Função implode()";
        $data_nascimento2 = implode("-", $vetor);
        pulaLinha(0);
        echo $data_nascimento2;
        pulaLinha(2);
        
        echo "Função str_split()";
        $novo_vetor = str_split("Marcio");
        pulaLinha(0);
        print_r($novo_vetor);
        pulaLinha(2);
        
        echo "Função chr()";
        pulaLinha(0);
        echo "A letra de código 77 é " . chr(77);
        pulaLinha(2);

        echo "Função ord()";
        pulaLinha(0);
        echo "O código da letra A é " . ord("A");
        pulaLinha(2);

        echo "Função strtolower()";
        pulaLinha(0);
        echo "Formatação de texto com strtolower(): " . strtolower($nome);
        pulaLinha(2);
        
        echo "Função strtoupper()";
        pulaLinha(0);
        echo "Formatação de texto com strtoupper(): " . strtoupper($nome);
        pulaLinha(2);
        
        echo "Função ucfirst()";
        pulaLinha(0);
        $m = strtolower($nome_sem_espacos);
        // echo "Formatação de texto com ucfirst(): " . ucfirst($m);
        echo "Formatação de texto com ucfirst(): " . ucfirst(strtolower(trim($nome)));
        pulaLinha(2);
        
        echo "Função ucwords()";
        pulaLinha(0);
        echo "Formatação de texto com ucwords(): " . ucwords($nome);
        pulaLinha(2);
        
        echo "Função strpos";
        pulaLinha(0);
        echo "Formatação de texto com strpos(): " . stripos($nome, "velasco");
        pulaLinha(2);
        
        echo "Função substr_count()";
        pulaLinha(0);
        echo "Formatação de texto com substr_count(): " . substr_count($nome, "Velasco");
        pulaLinha(2);
        
        echo "Função substr()";
        pulaLinha(0);
        
        echo "Formatação de texto com substr(): " . substr($nome_sem_espacos, 0, 6);
        pulaLinha(0);
        echo "Formatação de texto com substr(): " . substr($nome_sem_espacos, 6);
        pulaLinha(2);
        
        echo "Função str_replace()";
        pulaLinha(0);
        echo "Retorna um novo texto alterando a palavra: " . str_replace("Oliveira", "O.", $nome);
        pulaLinha(2);
        
        // echo "Resto da divisão = " .  19 % 11;