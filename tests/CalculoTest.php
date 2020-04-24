<?php

require 'src/Calculo.php';

use PHPUnit\Framework\TestCase;

class CalculoTest extends TestCase
{
	protected $calculo;
        
    /**
    * Setup
    **/
    protected function setUp()
    {
        $this->calculo = new Calculo;
        $this->calculo->num1 = "aasdf";
        $this->calculo->num2 = 2;

    }
    
    /**
    * @covers Calculo::soma
    *
    **/
	public function testSoma()
	{
		$this->assertEquals(5, $this->calculo->soma());
	}

    /**
    * @covers Calculo::subtracao
    *
    **/
    public function testSubtracao()
    {
        $this->assertEquals(-5, $this->calculo->subtracao());
    }

    /**
    * @covers Calculo::multiplicacao
    *
    **/
    public function testMultiplicacao()
    {
        $this->assertEquals(0, $this->calculo->multiplicacao());
    }

    /**
    *
    * @return boolean False e não vai para o teste de divisão caso 
    * o $num2 seja = 0
    *
    **/
    public function testDivisaoPorZero(){
                
        if($this->calculo->num2 == 0){
            $this->assertEquals("Divisão por zero!", $this->calculo->divisao());
        } else {
            $this->assertEquals(0, $this->calculo->divisao());    
        }
    }

    /**
    * tearDown
    **/
    protected function tearDown()
    {
        unset($this->calculo);
    }

}