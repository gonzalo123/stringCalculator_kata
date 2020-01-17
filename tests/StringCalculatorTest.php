<?php

use PHPUnit\Framework\TestCase;

class StringCalculatorTest extends TestCase
{
    function testBar()
    {
        $stringCalculator = new StringCalculator();
        $this->assertEquals(0, $stringCalculator->bar(), "first test must be red");
    }
}
