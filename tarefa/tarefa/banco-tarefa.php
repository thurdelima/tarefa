<?php
require_once("conecta.php");

function listaTarefas($conexao) {

	$tarefas = array();
	$resultado = mysqli_query($conexao, "select * from task");

	while($tarefa_array = mysqli_fetch_assoc($resultado)) {

		$nome = $tarefa_array['nome'];
		$descricao = $tarefa_array['descricao'];
		$nomeArquivo = $tarefa_array['nomeArquivo'];
		$tamanhoArquivo = $tarefa_array['tamanhoArquivo'];
		$tipoArquivo = $tarefa_array['tipoArquivo'];
		$arquivo = $tarefa_array['arquivo'];

		$tarefa = new Tarefa($nome, $descricao, $nomeArquivo, $tamanhoArquivo, $tipoArquivo, $arquivo);
		$tarefa->setId($tarefa_array['id']);

		array_push($tarefas, $tarefa);
	}

	return $tarefas;
}

function insereTarefa($conexao, Tarefa $tarefa) {



	$query = "insert into task (nome, descricao, nomeArquivo, tamanhoArquivo, tipoArquivo, arquivo)
		values ('{$tarefa->getNome()}', '{$tarefa->getDescricao()}',
			'{$tarefa->getNomeArquivo()}', '{$tarefa->getTamanhoArquivo()}',
				'{$tarefa->getTipoArquivo()}', '{$tarefa->getArquivo()}' )";

	return mysqli_query($conexao, $query);
}

function alteraTarefa($conexao, Tarefa $tarefa) {

	$query = "update task set nome = '{$tarefa->getNome()}',
		 descricao = '{$tarefa->getDescricao()}', nomeArquivo = '{$tarefa->getNomeArquivo()}',
			tamanhoArquivo= '{$tarefa->getTamanhoArquivo()}', tipoArquivo = '{$tarefa->getTipoArquivo()}',
				arquivo = '{$tarefa->getArquivo()}'  where id = {$tarefa->getId()} ";

	return mysqli_query($conexao, $query);
}

function buscaTarefa($conexao, $id) {

	$query = "select * from task where id = {$id}";

	$resultado = mysqli_query($conexao, $query);
	$tarefa_buscado = mysqli_fetch_assoc($resultado);

	$nome = $tarefa_buscado['nome'];
	$descricao = $tarefa_buscado['descricao'];
	$nomeArquivo = $tarefa_buscado['nomeArquivo'];
	$tamanhoArquivo = $tarefa_buscado['tamanhoArquivo'];
	$tipoArquivo = $tarefa_buscado['tipoArquivo'];
	$arquivo = $tarefa_buscado['arquivo'];

	$tarefa = new Tarefa($nome, $descricao, $nomeArquivo, $tamanhoArquivo, $tipoArquivo, $arquivo);
	$tarefa->setId($tarefa_buscado['id']);

	return $tarefa;
}

function removeTarefa($conexao, $id) {

	$query = "delete from task where id = {$id}";

	return mysqli_query($conexao, $query);
}
