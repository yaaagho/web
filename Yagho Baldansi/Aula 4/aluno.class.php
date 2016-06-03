<?php
	class Aluno{

	private $nome;
	private $dataNasc;
	private $foto;

	public function __construct($nome, $dataNasc, $foto) {
	$this->setNome($nome);
	$this->setDataNasc($dataNasc);
	$this->setFoto($foto);
	}

	public function getNome(){
	return this->nome;
	}

	public function setNome($nome){
	$this->nome = $nome;

	public function getDataNasc(){
	return this->dataNasc;
	}

	public function setDataNasc($DataNasc){
	$dataNasc2 = explode('/', $dataNasc)
	$this->dataNasc = "$dataNasc2[2]-$dataNasc2[1]-$dataNasc2[0]";
	}

	public function getFoto(){
	return $this->foto;
	}

	public function setFoto($foto){
	$this->foto = $foto;
	}
