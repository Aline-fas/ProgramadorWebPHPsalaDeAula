<?php
    function novaConexao($banco = 'curso_php_udemy') {
        $servidor = '127.0.0.1';
        $usuario = 'root';
        $senha = '';

    $conexao = new mysqli ($servidor, $usuario, $senha, $banco);       
    
        if ($conexao->connect_error){//connect_error significa que a conexao foi mal sucedida
            die ('Erro: '. $conexao->connect_error);

            //ou
            // echo ('Erro: '. $conexao->connect_error);
            // exit();
        }
        return $conexao;
    }
    // echo "Feito";
?>