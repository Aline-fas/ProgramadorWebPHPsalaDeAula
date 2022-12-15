<!DOCTYPE html>
<html lang="pt-br">

<head>

	<?php 
		include "html/head.php";
		
	?>

</head>
	
	<body>
		<?php include "html/header.php";
			require_once "src/conexao.php";
			$buscado = isset($_GET['buscado']) ? $_GET['buscado'] : '';

			$sql_query;

			if($buscado){
				$sql_code = "SELECT * FROM produtos WHERE descricao LIKE '%$buscado%' ORDER BY nome";
				
			}else{
				$sql_code = "SELECT * FROM produtos";
			}
			$sql_query = $conexao->query($sql_code);


			if (!isset($_SESSION)){
				SESSION_START();
			}
		?>
		<main>

			<?php
				if (isset($_SESSION['tipo'])){
					
					echo '<a href="cadastroProdutos.php" class= "col-6 btn btn-link" style="float:right;">
						<i class= "bi bi-plus-circle" style= "font-size: 2rem; "></i>
						<h6>Cadastrar</h6>
						</a>';
				}
			?>

	
			

			<h1>Produtos</h1>
			<h3>Lista cadastrados</h3>

			<?php
				if ($sql_query->num_rows >0) : ?>
				
			<div class="table-responsive">

				<table class="table table-striped">
					<tr>
						<th>ID</th>
						<th>FOTO</th>
						<th>NOME</th>
						<th>TIPO</th>
						<th>CATEGORIA</th>
						<th>FABRICANTE</th>
						<th>ATIVO</th>
						<th>AÇÃO</th>
					</tr>
					<?php
					while ($produto = $sql_query->fetch_assoc()){
						?>
				<tr>
					<td><?= $produto['idproduto']?></td>
					<td><img height= '50' src = " <?= $produto['foto']?>"></td>
					<td><?= $produto['nome']?></td>
					<td><?= $produto['tipo']?></td>
					<td><?= $produto['categoria']?></td>
					<td><?= $produto['fabricante']?></td>
					<td><?= $produto['ativo']?></td>
					<td>
						<?php
							if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "Administrador"){
								$idProduto = $produto['idproduto'];
								echo "<a href='estoque.php?id=$idProduto;'>[ESTOQUE]</a>";
							}
							?>
                        <a href="mais_detalhes.php?id=<?=$produto['idproduto']; ?>">[DETALHES]</a>
					</td>
				</tr>
				
				<?php }?>
			</table>
		</div>
		<?php else :
			echo "<h3 style='text-align: center; margin-top:50px'> O produto &quot;$buscado&quot; não foi encontrado.</h3>";
		endif;
		?>
		</main>
		
		<?php include "html/footer.php" ?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>
</html>