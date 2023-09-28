<?php

declare(strict_types=1);

namespace Framework\Rules;

use Framework\Contracts\RuleInterface;

class MatchRule implements RuleInterface
{
    public function validate(array $formData, string $field, array $params): bool
    {
        $fieldOne = $formData[$field];
        $fieldTwo = $formData[$params[0]];
        return $fieldOne === $fieldTwo;
    }
    public function getMessage(array $formData, string $field, array $params): string
    {
        return "Password does not match.";
    }
}
