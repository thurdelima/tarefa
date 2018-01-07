<?php

function carregaClasse($nomeDaClasse) {
	require_once("class/".$nomeDaClasse.".php");
}

spl_autoload_register("carregaClasse");

error_reporting(E_ALL ^ E_NOTICE);
require_once("mostra-alerta.php"); ?>
<html>
<head>
	<meta charset="utf-8">
	<title>Minha Loja</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/loja.css" rel="stylesheet">
</head>
<body>


	<div class="container">
		<div class="principal">
			<?php  mostraAlerta("success"); ?>
			<?php mostraAlerta("danger"); ?>
