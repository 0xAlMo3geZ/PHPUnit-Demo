<?php

use PHPUnit\Framework\TestCase;

require_once 'src/bootstrap.php';

class MyClassTest extends TestCase
{
    public function testSum()
    {
        $myClass = new MyClass();
        $this->assertEquals(3, $myClass->sum(1, 2));
    }
}
