<header>
			<section>
				<figure id="logo">
					<img src="img/favicon.ico" alt="Logo">
				</figure>
				<input type="text" name="buscar" id="buscar" placeholder="Busque aqui" >
				<h1 id="textoEnviamos">Enviamos produtos para todo o território nacional.</h1>
				<figure style="border: none">
					<img id="carrinho" src="img/carrinhoCompra.png" alt="">
					<?php 
					if(!isset($_SESSION)){
						session_start();
					}
					if(!isset($_SESSION['id'])){
						echo '<img class="cliente" src="img/clientes.png" alt="" data-bs-toggle="modal" data-bs-target="#exampleModal">';

					}else {
						echo '<img class="cliente" src="img/logout.png" alt=""data-bs-toggle="modal" data-bs-target="#logout_modal">';
					}
					?>
				</figure>
			</section>
			
			<?php include "menu.php" ?> 

		</header>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
							<input type="text" name="email" class="form-control" placeholder="E-mail"><br>

							<label class="form-label">Senha:</label><br>
							<input type="password" name="senha" class="form-control"><br>

							<!-- <input type="submit" value="Entrar" class="btn btn-primary"> -->


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
		<div class="modal fade" id="logout_modal" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h1 class="modal-title fs-5" id="staticBackdropLabel">Fazer Logout</h1>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<form action="src/logout.php" method="post" >
						<div class="modal-body">
							<h2 style= "Text-align: center">Deseja realmente sair?</h2>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
							<button type="submit" class="btn btn-danger">Sair</button>
						</div>
					</form>
				</div>
			</div>
		</div>