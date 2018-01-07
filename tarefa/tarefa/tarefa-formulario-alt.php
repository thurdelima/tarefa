<?php $dir = "uploads/"; ?>
<tr>
	<td>Nome</td>
	<td>
		<input class="form-control" type="text" name="nome"
			value="<?= $tarefa->getNome()?>" required>
	</td>
</tr>
<tr>
	<td>Descrição</td>
	<td>
		<input class="form-control" type="text"  name="descricao"
			value="<?= $tarefa->getDescricao()?>" required>
	</td>
</tr>
<tr>
	<td>Arquivo</td>
	<td>
		<input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
		<input type="file"  name="arquivo" class="custom-file-input" value="<?=$dir.$tarefa->getNomeArquivo() ?>" required>
    <span class="custom-file-control"></span>
	</td>
</tr>
<tr>
	<td>Imagem Atual</td>

	<td><div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img class="img-responsive" src="<?=$dir.$tarefa->getNomeArquivo() ?>" alt="<?=$tarefa->getNomeArquivo()?>">
    </a>
  </div>

</div></td>



</tr>
