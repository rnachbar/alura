<?php 
require_once ("header.php"); // require_once para inclir o arquivo apenas uma vez evitando que ele seja chamado nessa página mais de uma vez, evitando que de erro.
require_once ("banco-categoria.php"); 
require_once ("logica-usuario.php");

verificaUsuario();

$produto = array("nome" => "", "descricao" => "", "preco" => "", "categoria_id" => "1");
$usado = "";
$categorias = listaCategorias($conexao); ?>

<h1>Formulário de Produto</h1>

<form action="adiciona-produto.php" method="post">
	<table class="table">
		
		<?php include("produto-formulario-base.php"); ?>
		
		<tr>
			<td> 
				<button class="btn btn-primary" type="submit">Cadastrar</button> 
			</td>
		</tr>		
		
	</table>
</form>

<?php require_once ("footer.php"); ?>