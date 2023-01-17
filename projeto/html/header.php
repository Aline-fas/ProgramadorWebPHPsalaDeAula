<?php
$login = isset($_COOKIE['login']) ? $_COOKIE['login'] : '';
if(!isset($_SESSION)){
	session_start();
}
?>
<header>
			<section>
				<figure id="logo">
					<img src="img/favicon.ico" alt="Logo">
				</figure>
				
				<!-- <input type="text" name="buscar" id="buscar" placeholder="Busque aqui" > -->
				
				<form action="produtos.php" method="get">
					<div id="buscar" class="input-group">
						<input class="form-control" type="text" name="buscado"  placeholder="Busque aqui" required>
						<button class="btn btn-primary" id="btn-buscar">
							<i class="bi bi-search"></i>
						</button>
					</div>
				</form>

				<h1 id="textoEnviamos">Enviamos produtos para todo o território nacional.</h1>
				<figure style="border: none">
				<img id="carrinho" src="img/carrinhoCompra<?= (isset($_SESSION['carrinho'])) ? '2' : '' ?>.png" alt="" data-bs-toggle="modal" data-bs-target="#carrinho_modal">
				<!-- <img id="carrinho" src="img/carrinhoCompra.png" > -->
					<?php
					
					if(!isset($_SESSION)){
						session_start();
					}

					if(!isset($_SESSION['id'])){

						echo '<img class="cliente" src="img/clientes.png" alt="" data-bs-toggle="modal" data-bs-target="#login_modal">';
					} else {
						echo '<img class="cliente" src="img/logout.png" alt=""  data-bs-toggle="modal" data-bs-target="#logout_modal"  style="width: 65px; margin-top:10px">';
					}

					?>
				</figure>
			</section>
			
			<?php include "menu.php" ?> 

		</header>
		<!-- Modal -->
<div class="modal fade" id="login_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="staticBackdropLabel">Fazer Login</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<form action="src/controler/cliente_bd/loginCliente.php" method="post" >
						<div class="modal-body">

							<main id="resposta" class="alert alert-danger" role="alert" style="display: none">
								<!-- A simple danger alert—check it out! -->
							</main>
							<br>

							<label class="form-label">E-mail:</label><br>
							<input type="text" name="email" class="form-control" placeholder="E-mail" value="<?= $login ?>"><br>

							<label class="form-label">Senha:</label><br>
							<input type="password" name="senha" class="form-control"><br>

							<!-- <input type="submit" value="Entrar" class="btn btn-primary"> -->

							<div class="form-group">
								<input id="lembrar" name="lembrar" type="checkbox" 
								<?= ($login != '')? 'checked': ''; ?> >
								<label for="lembrar">Lembrar meu e-mail</label>
							</div>

							<br>
							<a href="cadastroCliente.php">Crie o seu CADASTRO</a>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
							<button type="submit" class="btn btn-primary">Entrar</button>
						</div>
					</form>
				</div>
			</div>
</div>
		<!-- Modal -->
<div class="modal fade" id="logout_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="staticBackdropLabel">Sair</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<form action="src/logout.php" method="post" >
						<div class="modal-body">

						<h2 style="text-align: center;">Deseja relamente sair?</h2>
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
							<button type="submit" class="btn btn-danger">Sair</button>
						</div>
					</form>
				</div>
			</div>
</div>
<!-- Modal -->
<div class="modal fade" id="funcionario_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="staticBackdropLabel">Fazer Login Funcionário</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<form action="src/controler/funcionario_bd/loginFuncionario.php" method="post" >
						<div class="modal-body">

							<main id="resposta" class="alert alert-danger" role="alert" style="display: none">
								<!-- A simple danger alert—check it out! -->
							</main>
							<br>

							<label class="form-label">E-mail:</label><br>
							<input type="text" name="email" class="form-control" placeholder="E-mail"><br>

							<label class="form-label">Senha:</label><br>
							<input type="password" name="senha" class="form-control"><br>

							<!-- <input type="submit" value="Entrar" class="btn btn-primary"> -->

							<?php
						if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "Administrador"){
							echo "<a href='cadastroFuncionario.php'>Cadastro de Funcionário</a>";
						}?>

							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
							<button type="submit" class="btn btn-primary">Entrar</button>
						</div>
					</form>
				</div>
			</div>
</div>
<!-- Modal -->
<div class="modal fade" id="carrinho_modal" tabindex="-1" aria-labelledby="exampleModalPopoversLabel" style="display: none;" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalPopoversLabel">Carrinho de compras</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<?php if(isset($_SESSION['carrinho'])) : ?>
        <h2 class="fs-5"><?= count($_SESSION['carrinho']) ?> - PRODUTOS NO SEU CARRINHO</h2><br>
			<?php foreach($_SESSION['carrinho'] as $key => $value) : ?>
				<div>
					<a id="excluir" href="?remover=<?= $key ?>"><i class="bi bi-trash text-danger"></i></a>
					<?= $value['qtd'] .' x '. number_format($value['valor'], 2, ',', '.') ?>
					= R$ <?= number_format($value['valor'] * $value['qtd'], 2, ',', '.'); ?> - 
					<?= $value['produto']; ?>
				</div>
				<div>
				</div>
		
			<hr>

        <?php 
			endforeach;
		endif; 
		?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <a href="carrinho.php" type="button" class="btn btn-primary">IR PARA O CARRINHO</a>
      </div>
    </div>
  </div>
</div>
<?php
	//Remover do carrinho 
	if(isset($_GET['remover'])){
		$idRemovido = $_GET['remover'];
		unset ($_SESSION['carrinho'][$_GET['remover']]);

		if(isset($_SESSION['carrinho'])){
			if(count($_SESSION['carrinho']) == 0){
				unset($_SESSION['carrinho']);
			}
		}

		unset($_GET['remover']);
		echo '<script defer>
		let dominio = window.location.host;
		let end = window.location.href;// maisDetalhes.php
		let finalEnd = end.indexOf("."); // posição do caracter "."
		let tamanhoPasta = "/php/projeto/".length;
		let pagina = "";
		let posicao = end.indexOf("localhost"); 
		if( posicao >= 0){
			pagina = end.substr((posicao + dominio.length + tamanhoPasta), finalEnd); // maisDetalhes
		} else {
			pagina = end.substr((dominio.length + 1), finalEnd); //maisDetalhes
		}

		pagina = pagina.substr(0, pagina.indexOf("."));
		let idItemRemovido = end.substr(end.indexOf("=")+1, end.length);
		console.log("Domínio: "+ dominio);
		console.log("tamanho do domínio: "+ dominio.length + " + 9 = "+ (dominio.length +9));
		console.log("Tamanho da pasta: "+ tamanhoPasta);
		console.log("Pagina: "+ pagina);
		console.log("Endereço 1: "+ end);
		console.log("Tamanho do Endereço 1: "+ end.length);
		console.log("Posição do Ponto do Endereço 1: "+ end.indexOf("."));
			if(pagina == "maisDetalhes"){
				end = end.substr(0, end.indexOf("?"));
				end = end + "?id=" + idItemRemovido;
				// end = pagina + ".php?id=" + idItemRemovido;
			} else {
				end = end.substr(0, end.indexOf("?"));
				// end = end + "Teste";
			}
	
			console.log("Endereço 2: " + end);
			window.location.href=""+end;
			
		</script>';

	}
?>
<script>
		
    // const btn = document.querySelector("#excluir")
	
    // bnt.addEventListener('click', () =>{
	// 	// location.reload()
	
    // });
	
</script>