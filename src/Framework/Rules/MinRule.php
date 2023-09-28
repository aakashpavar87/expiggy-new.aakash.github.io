<?php

declare(strict_types=1);

namespace Framework\Rules;

use Framework\Contracts\RuleInterface;
use InvalidArgumentException;

class MinRule implements RuleInterface
{
    public function validate(array $formData, string $field, array $params): bool
    {
        if (empty($params[0])) {
            throw new InvalidArgumentException("Minimum Length not Specified"); //If we forget to pass custom params
        }
        $length = (int) $params[0];
        return $formData[$field] >= $length;
    }
    public function getMessage(array $formData, string $field, array $params): string
    {
        return "Age must be greater than or equal to 18";
    }
}
