<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Service\Operation;

class OperationTest extends TestCase
{
    public function testSomething(): void
    {
        //$this->assertTrue(true);
        //$this->assertEquals(11,6+5);
        $operation=new Operation();
        $this->assertEquals(20,$operation->getRes("8#+#5#+#2#*#3#+#1"));
        $this->assertEquals("Infinity",$operation->getRes("8#/#0"));
    }
}
