<?php 
require_once ("header.php"); // require_once para inclir o arquivo apenas uma vez evitando que ele seja chamado nessa página mais de uma vez, evitando que de erro.
require_once ("logica-usuario.php");

?>

<h1>Bem vindo</h1>

<?php 

if (usuarioEstaLogado()) {

	?> <p class="text-success">Você está logado como <?= usuarioLogado() ?>. <a href="logout.php">Sair</a></p> <?php 

} else { ?>

	<h2>Login</h2>

	<form action="login.php" method="post">
		<table class="table">
			<tr>
				<td>E-mail</td>
				<td>
					<input class="form-control" type="email" name="email">
				</td>
			</tr>

			<tr>
				<td>Senha</td>
				<td>
					<input class="form-control" type="password" name="senha">
				</td>
			</tr>

			<tr>
				<td>
					<button class="btn btn-primary">Login</button>
				</td>
			</tr>
		</table>
	</form> 
	 <?php 
} 

require_once ("footer.php"); ?>
		