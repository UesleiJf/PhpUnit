<?php

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase
{
	public function testRetornaSomaCorreta()
	{
		require 'functions.php';

		$this->assertEquals(4, adicionar(2, 2));
		$this->assertNotEquals(4, adicionar(2, 3));
	}
}