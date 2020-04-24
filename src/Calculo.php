<?php

class Calculo
{

	/**
	*
	*@var integer
	*
	**/
	public $num1;

	/**
	*
	*@var integer
	*
	**/
	public $num2;

	/**
	*
	* @param integer $num1 Primeiro Numero
	* @param integer $num2 Segundo Numero
	**/
	public function soma()
	{
		return $this->num1 + $this->num2;
	}

	/**
	*
	* @param integer $num1 Primeiro Numero
	* @param integer $num2 Segundo Numero
	**/
	public function subtracao()
	{
		return $this->num1 - $this->num2;
	}

	/**
	*
	* @param integer $num1 Primeiro Numero
	* @param integer $num2 Segundo Numero
	**/
	public function multiplicacao()
	{
		return $this->num1 * $this->num2;
	}

	/**
	*
	* @param integer $num1 Primeiro Numero
	* @param integer $num2 Segundo Numero
	**/
	public function divisao()
	{
		if($this->num2 == 0){
			return "Divisão por zero!";
		}else {
			return $this->num1 / $this->num2;	
		}
	}
}