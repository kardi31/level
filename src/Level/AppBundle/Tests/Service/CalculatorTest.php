<?php

namespace Level\AppBundle\Tests\Service;

use Level\AppBundle\Service\Calculator;
use Symfony\Bundle\FrameworkBundle\Tests\TestCase;

class CalculatorTest extends TestCase
{
    /**
     * @var Calculator
     */
    private $calculator;

    public function setUp()
    {
        $this->calculator = new Calculator();
    }

    public function testAddReturnsCorrectResult()
    {
        $result = $this->calculator->add(5, 3);
        $this->assertEquals(8, $result);
    }

    public function testSubReturnsCorrectResult()
    {
        $result = $this->calculator->sub(5, 3);
        $this->assertEquals(2, $result);
    }

    public function testMulReturnsCorrectResult()
    {
        $result = $this->calculator->mul(5, 3);
        $this->assertEquals(15, $result);
    }

    public function testDivReturnsCorrectResult()
    {
        $result = $this->calculator->div(9, 3);
        $this->assertEquals(3, $result);
    }

    public function testDivThrowsDivisionByZeroError()
    {
        $this->expectException(\DivisionByZeroError::class);
        $this->calculator->div(9, 0);
    }
}
