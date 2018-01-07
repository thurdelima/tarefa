<?php
require_once("cabecalho.php");
require_once("banco-tarefa.php");


$nome = addslashes($_POST['nome']);
$descricao = $_POST['descricao'];
$arquivo = $_FILES['arquivo']['tmp_name'];
$tamanhoArquivo = $_FILES['arquivo']['size'];
$tipoArquivo =$_FILES['arquivo']['type'];
$nomeArquivo = $_FILES['arquivo']['name'];

$dir = "uploads/";
$_UP['extensoes'] = array('jpg', 'png', 'gif');

$extensao = strtolower(end(explode('.', $nomeArquivo)));
if (array_search($extensao, $_UP['extensoes']) === false) {

	$_SESSION["danger"] = "Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif";
	header("Location: tarefa-formulario-alteracao.php?id=".$_POST['id']);
	exit;
}

$tarefa = new Tarefa($nome, $descricao, $nomeArquivo, $tamanhoArquivo, $tipoArquivo, $arquivo);
$tarefa->setId($_POST['id']);



if($arquivo != 'none'){

   move_uploaded_file ( $arquivo , $dir.$nomeArquivo );
	if(alteraTarefa($conexao, $tarefa)) {


		$_SESSION["success"] = "A tarefa ".  $tarefa->getNome() . " foi alterada com sucesso.";
		header("Location: tarefa-formulario-alteracao.php?id=".$tarefa->getId());



	} else {
		$msg = mysqli_error($conexao);

		$_SESSION["danger"] = "Estamos com problemas na conexão, tente novamente mais tarde, agradecemos a compreenção";
		header("Location: tarefa-formulario-alteracao.php?id=".$tarefa->getId());


	}


}

 include("rodape.php");
