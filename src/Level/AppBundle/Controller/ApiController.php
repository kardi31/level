<?php

namespace Level\AppBundle\Controller;

use Level\AppBundle\Service\Calculator;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class ApiController extends Controller
{
    public function calculateAction(int $number1, int $number2, string $operand): JsonResponse
    {
        $calculator = new Calculator();

        try {
            $result = $calculator->{$operand}($number1, $number2);
        } catch (\DivisionByZeroError | \ArithmeticError $e) {
            return new JsonResponse([], 404);
        }

        return new JsonResponse(['result' => $result]);
    }
}
