<?php
require_once("cabecalhoMain.php");
require_once("logica-usuario.php");
require_once("banco-tarefa.php");

$id = $_GET['id'];
$tarefa = buscaTarefa($conexao, $id);

$dir = "uploads/";

verificaUsuario();



?>

<h1>Alteração de Tarefa</h1>
<form action="altera-tarefa.php" enctype="multipart/form-data" method="post">
	<input type="hidden" name="id" value="<?=$tarefa->getId()?>">
	<table class="table">

		<?php include("tarefa-formulario-alt.php"); ?>

		<tr>
			<td>
				<button class="btn btn-primary" type="submit">Alterar</button>
			</td>
		</tr>
	</table>
</form>

<?php include("rodape.php"); ?>
