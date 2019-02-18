<?php

require __DIR__ . "/../src/Calculator.php";
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testCalculateAdd()
    {
        $firstOperand = 5;
        $secondOperand = 5;
        $operator = '+';

        $expected = 25;

        $calculator = new Calculator();
        $result = $calculator->calculate($firstOperand, $secondOperand, $operator);
        $this->assertEquals($expected, $result);
    }



}