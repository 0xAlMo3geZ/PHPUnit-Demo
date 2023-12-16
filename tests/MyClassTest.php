<?php

require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class MyClassTest extends TestCase
{
    public function testSum()
    {
        $this->assertEquals(3, MyClass::sum(1, 2));
    }
}
