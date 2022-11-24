<nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="produtos.php">Produtos</a></li>
            <?php
                if (isset($_SESSION['tipo'])){
                    echo '<li><a href="clientes.php">Clientes</a></li>';
                }
            ?>
            <?php
                if (isset($_SESSION['tipo'])){
                    echo '<li><a href="financas.php">Finanças</a></li>';
                }
            ?>
            <li><a href="sobre_nos.php">Sobre nós</a></li>
            <li><a href="contato.php">Contatos</a></li>
            <li><a href="edicaoCliente.php">Configurações
            <i class= "bi bi-gear-fill" style =" color:white;"></i></a></li>
            
        </ul>
    </nav>