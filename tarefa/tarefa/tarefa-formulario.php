<?php
require_once("cabecalhoMain.php");

require_once("logica-usuario.php");

verificaUsuario();



?>

<h1>Formulário de tarefa</h1>
<form action="adiciona-tarefa.php" enctype="multipart/form-data" method="post">
	<table class="table">

		<?php include("tarefa-formulario-base.php"); ?>

		<tr>
			<td>
				<button class="btn btn-primary" type="submit">Cadastrar</button>
			</td>
		</tr>
	</table>
</form>

<?php include("rodape.php"); ?>
