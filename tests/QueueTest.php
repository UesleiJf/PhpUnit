<?php

require 'src/Queue.php';

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
	public function testNewQueueIsEmpty()
	{

		$queue = new Queue;

		$this->assertEquals(0, $queue->getCount());
	}

	public function testAnItemIsAdded(){
		
		$queue = new Queue;

		$queue->push("ueslei");

		$this->assertEquals(1, $queue->getCount());	
	}

	public function testAnItemIsRemoved(){
		
		$queue = new Queue;

		$queue->push("ueslei");
		$queue->pop();

		$this->assertEquals(0, $queue->getCount());	
	}
}