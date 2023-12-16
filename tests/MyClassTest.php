<?php

use PHPUnit\Framework\TestCase;

require_once 'src/bootstrap.php';

class MyClassTest extends TestCase
{
    public function testSum()
    {
        $this->assertEquals(3, MyClass::sum(1, 2));
    }
}
