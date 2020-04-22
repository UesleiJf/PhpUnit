<?php

require "User.php";

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
	public function testRetornaNomeCompleto()
	{

		$user = new User();

		$user->primeiro_nome = "Terezinha";
		$user->segundo_nome = "Peixoto";

		$this->assertEquals('Terezinha Peixoto', $user->getNomeCompleto());
	}

	public function testNomeCompletoVazio ()
	{
		$user = new User();	

		$this->assertEquals('', $user->getNomeCompleto());
	}

}