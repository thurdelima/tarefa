<?php

class Tarefa {

	private $id;
	private $nome;
	private $descricao;
	private $nomeArquivo;
	private $tamanhoArquivo;
	private $tipoArquivo;
	private $arquivo;

	function __construct($nome, $descricao, $nomeArquivo, $tamanhoArquivo, $tipoArquivo, $arquivo) {
		$this->nome = $nome;
		$this->descricao = $descricao;
		$this->nomeArquivo = $nomeArquivo;
		$this->tamanhoArquivo = $tamanhoArquivo;
		$this->tipoArquivo = $tipoArquivo;
		$this->arquivo = $arquivo;

	}

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}



	public function getNome() {
		return $this->nome;
	}

	public function setNome($nome) {
		return $this->nome;
	}

	public function getDescricao() {
		return $this->descricao;
	}

	public function setDescricao($descricao) {
		$this->descricao = $descricao;
	}

	public function getNomeArquivo() {
		return $this->nomeArquivo;
	}

	public function setNomeArquivo($nomeArquivo) {
		 $this->arquivo = $nomeArquivo;
	}

	public function getTamanhoArquivo() {
		return $this->tamanhoArquivo;
	}

	public function setTamanhoArquivo($tamanhoArquivo) {
		 $this->tamanhoArquivo = $tamanhoArquivo;
	}

	public function getTipoArquivo() {
		return $this->tipoArquivo;
	}

	public function setTipoArquivo($tipoArquivo) {
		 $this->tipoArquivo = $tipoArquivo;
	}




	public function getArquivo() {
		return $this->arquivo;
	}

	public function setArquivo($arquivo) {
		 $this->arquivo = $arquivo;
	}




}

?>
