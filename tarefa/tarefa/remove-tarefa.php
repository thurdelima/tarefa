<?php
require_once("cabecalho.php");
require_once("banco-tarefa.php");
require_once("logica-usuario.php");

$id = $_POST['id'];
removeTarefa($conexao, $id);
$_SESSION["success"] = "Tarefa removida com sucesso.";
header("Location: tarefa-lista.php");
die();

?>
