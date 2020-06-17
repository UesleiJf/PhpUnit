<?php

class User
{

	/**
	* Primeiro nome
	* @var string
	**/
	public $primeiro_nome;

	/**
	* Último nome
	* @var string
	**/
	public $segundo_nome;

	/**
	* Nome completo
	* @return string Retorna o nome completo
	**/
	public function getNomeCompleto()
	{
		return trim("$this->primeiro_nome $this->segundo_nome");
	}
}
