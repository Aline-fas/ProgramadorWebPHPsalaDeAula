
        <?php
            require_once "criandoConexao.php";

            $conexao = novaConexao(null);
            $sql = 'CREATE DATABASE IF NOT EXISTS curso_php_udemy';
        
            $resultado = $conexao->query($sql);

                if ($resultado){
                    echo "Sucesso:)";
                }else {
                    echo "Erro:" . $conexao->error;
                }
            $conexao->close(); 
      