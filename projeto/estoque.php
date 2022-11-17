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

			$id= isset($_GET['id'])? $_GET['id'] : 0;

			$sql_code = "SELECT * FROM produtos LEFT JOIN estoque ON idproduto = id_produto WHERE idproduto = '$id'";

			$sql_query = $conexao->query($sql_code);
		?>
		<main>
			<h1>Estoque</h1>
			<h3>Lista cadastrados</h3>
			<table class="table table-striped">
				<tr>
					<th>ID</th>
					<th>FOTO</th>
					<th>NOME</th>
					<th>TIPO</th>
					<th>CATEGORIA</th>
					<th>FABRICANTE</th>
					<th>QTD</th>
					<th>REGISTRO</th>
					<th>DATA</th>
					<th>VALOR COMPRA</th>
					<th>VALOR VENDA</th>
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
					<td><?= $produto['qtd']?></td>
					<td><?= $produto['registro']?></td>
					<td><?= $produto['data_registro']?></td>
					<td><?= $produto['valor_compra']?></td>
					<td><?= $produto['valor_venda']?></td>
				</tr>
					<?php }?>
			</table>
		</main>
		
		<?php include "html/footer.php" ?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>