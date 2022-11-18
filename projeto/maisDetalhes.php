<!DOCTYPE html>
<html lang="pt-br">

<head>

<?php 
			include "html/head.php";
			require_once "src/conexao.php";

			$id= isset($_GET['id'])? $_GET['id'] : 0;

			$sql_code1 = " SELECT 
								* 
							FROM produtos 
							LEFT JOIN estoque ON idproduto = id_produto 
							WHERE idproduto = $id ";
			$sql_query1 = $conexao->query($sql_code1) or die("Falha na execução do codigo SQL: " .$conexao->error);
			
			$lista = [];

			if($sql_query1->num_rows > 0){
				$prod1 = $sql_query1->fetch_assoc();
				$lista[] = $prod1;
			}
				//echo '<pre>';print_r($prod1);die;
		?>

</head> 

			<!-- alteração a fazer no banco de dados em casa
			
			use projeto;

RENAME TABLE produto TO produtos;
ALTER TABLE produtos ADD categoria varchar(30) AFTER tipo;
ALTER TABLE produtos ADD fabricante varchar(30) AFTER categoria;
ALTER TABLE estoque CHANGE valor valor_compra double;
ALTER TABLE estoque ADD valor_venda double AFTER valor_compra;
 -->
	
	<body>
		<?php include "html/header.php" ?>
		<main>
			<h1>Detalhes do produto</h1>
			<div class="card">
				<img src="<?php echo $prod1['foto']?>" style="width: 20rem; margin: auto" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title"><?php echo $prod1['nome']?></h5>
					<p class="card-text"><?php echo $prod1['descricao']?></p>
				</div>
				<ul class="list-group list-group-flush">
					<li class="list-group-item">TIPO: <?php echo $prod1['tipo']?></li>
					<li class="list-group-item">CATEGORIA: <?php echo $prod1['categoria']?></li>
					<li class="list-group-item">EM ESTOQUE: <?php echo $prod1['qtd']?></li>
					<li class="list-group-item">Valor: R$ <?php echo $prod1['valor_venda']?></li>
				</ul>
				<div class="card-body">
					<a href="index.php" class="card-link">Voltar</a>
					<a href="produtos.php" class="card-link">Lista de Produtos</a>
				</div>
			</div>
		</main>
		
		<?php include "html/footer.php" ?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>