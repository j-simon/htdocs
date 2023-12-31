<?php

$result = 0;

function calculate(float|int $numberOne, float|int $numberTwo, string $operator): float|int|string
{
    switch ($operator) {
        case '+':
            return $numberOne + $numberTwo;
            break;

        case '-':
            return $numberOne - $numberTwo;
            break;

        case '*':
            return $numberOne * $numberTwo;
            break;

        case '/':
            if ($numberTwo == 0) {
                return 'Cannot divide by zero';
            } else {
                return $numberOne / $numberTwo;
            }
            break;

        default:
            return "No valid operator given";
    }
}

function validateInput(array $formData = []): float|int|string
{
    if (!empty($formData) && is_numeric($formData['numberOne']) && is_numeric($formData['numberTwo']) && !empty($formData['operator'])) {
        return calculate($formData['numberOne'], $formData['numberTwo'], $formData['operator']);
    } else {
        return 'Please enter valid numbers';
    }
}

$result = validateInput($_POST);