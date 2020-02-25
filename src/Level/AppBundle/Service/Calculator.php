<?php
declare(strict_types=1);

namespace Level\AppBundle\Service;

class Calculator
{
    public function add(int $number1, int $number2): int
    {
        return $number1 + $number2;
    }

    public function sub(int $number1, int $number2): int
    {
        return $number1 - $number2;
    }

    public function mul(int $number1, int $number2): int
    {
        return $number1 * $number2;
    }

    /**
     * Returns the integer quotient of the division of dividend by divisor.
     *
     * @param int $number1
     * @param int $number2
     *
     * @return int
     * @throws \ArithmeticError
     *
     * @throws \DivisionByZeroError
     */
    public function div(int $number1, int $number2): int
    {
        return intdiv($number1, $number2);
    }
}
