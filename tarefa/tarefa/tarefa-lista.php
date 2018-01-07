<?php
require_once("cabecalhoMain.php");
require_once("banco-tarefa.php");
$dir = "uploads/";
?>

<table class="table table-striped table-bordered">
	<thead class="thead-dark">
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Descrição</th>
      <th scope="col">Nome do arquivo</th>
      <th scope="col">Tipo do arquivo</th>
			<th colspan="3" scope="col"></th>
    </tr>
  </thead>
	<?php
	$tarefas = listaTarefas($conexao);
	foreach($tarefas as $tarefa) :
		?>

		<tr>

			<td><?= $tarefa->getNome() ?></td>
			<td><?= $tarefa->getDescricao() ?></td>
			<td><?= $tarefa->getNomeArquivo() ?></td>
			<td><?= $tarefa->getTipoArquivo() ?></td>
			<td>
				<a class="btn btn-success"
				href="<?= $dir.$tarefa->getNomeArquivo() ?>" target="_blank">
				<span class="glyphicon glyphicon-picture"></span>
			</a>




		</td>
		<td>
			<a class="btn btn-primary"
			href="tarefa-formulario-alteracao.php?id=<?=$tarefa->getId()?>">
			alterar
		</a>
	</td>
	<td>
		<form action="remove-tarefa.php" method="post">
			<input type="hidden" name="id" value="<?=$tarefa->getId()?>">
			<button class="btn btn-danger">remover</button>
		</form>
	</td>
</tr>
<?php
endforeach
?>
</table>






<?php include("rodape.php"); ?>
