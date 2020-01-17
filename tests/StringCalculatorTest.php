<?php

use PHPUnit\Framework\TestCase;

class StringCalculatorTest extends TestCase
{
    function testBar()
    {
        $foo = new StringCalculator();
        $this->assertEquals(0, $foo->bar(), "first test must be red");
    }
}
