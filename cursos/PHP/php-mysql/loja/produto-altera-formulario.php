<?php
require_once ("header.php"); // require_once para inclir o arquivo apenas uma vez evitando que ele seja chamado nessa página mais de uma vez, evitando que de erro.
require_once ("banco-categoria.php");
require_once ("banco-produto.php");

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao);
$usado = $produto['usado'] ? "checked = 'checked'" : "";

 ?>

<h1>Alterando Produto</h1>

<form action="altera-produto.php" method="post">
	<input type="hidden" name="id" value="<?= $produto['id'] ?>">
	<table class="table">
		
		<?php include("produto-formulario-base.php"); ?>
		
		<tr>
			<td> 
				<button class="btn btn-primary" type="submit">Alterar</button> 
			</td>
		</tr>		
		
	</table>
</form>

<?php require_once ("footer.php");