<?php

class Queue
{

	/**
	*
	*@var array
	*
	**/
	protected $items = [];

	/**
	*
	* @param mixed $item Lista de itens
	*
	**/
	public function push($item)
	{
		$this->items[] = $item;

	}

	/**
	*
	* @return mixed item Retorna uma lista de itens
	*
	**/
	public function pop()
	{
		return array_pop($this->items);
	}

	/**
	*
	* @return integer Retorna o número de itens
	*
	**/
	public function getCount()
	{
		return count($this->items);
	}
}