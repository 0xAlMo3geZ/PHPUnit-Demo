<?php

use PHPUnit\Framework\TestCase;

require_once 'src/bootstrap.php';

class MyClassTest extends TestCase
{
    public function testConcatenateStrings()
    {
        $myClass = new MyClass();
        $str1 = 'Hello';
        $str2 = 'World';
        $expectedResult = 'HelloWorld';

        $result = $myClass->concatenateStrings($str1, $str2);

        $this->assertEquals($expectedResult, $result);
    }
}
