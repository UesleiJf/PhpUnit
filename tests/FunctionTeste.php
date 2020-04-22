<?php

require 'functions.php';
use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase
{
	public function testRetornaSomaCorreta()
	{
		$this->assertEquals(4, adicionar(2, 2));
		$this->assertEquals(6, adicionar(2, 4));
		$this->assertEquals(102, adicionar(100, 2));
	}

	public function testRetornaSomaIncorreta()
	{
		$this->assertNotEquals(4, adicionar(2, 3));
		$this->assertNotEquals(4, adicionar(2, 1));
	}
}