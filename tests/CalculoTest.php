<?php

require 'src/Calculo.php';

use PHPUnit\Framework\TestCase;

class CalculoTest extends TestCase
{
	protected $calculo;
        
    protected function setUp()
    {
        $this->calculo = new Calculo;
        $this->calculo->num1 = 5;
        $this->calculo->num2 = 0;

    }
    
	public function testSoma()
	{
		$this->assertEquals(5, $this->calculo->soma());
	}

    public function testSubtracao()
    {
        $this->assertEquals(5, $this->calculo->subtracao());
    }

    public function testMultiplicacao()
    {
        $this->assertEquals(0, $this->calculo->multiplicacao());
    }
    
    public function testDivisao()
    {
        if($this->calculo->num2 == 0){
            $this->assertEquals("Divisão por zero!", $this->calculo->divisao());
        }else {
            $this->assertEquals(2.5, $this->calculo->divisao());    
        }
    }

    protected function tearDown()
    {
        unset($this->calculo);
    }

}