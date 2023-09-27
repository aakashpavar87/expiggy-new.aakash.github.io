<?php

declare(strict_types=1);

namespace Framework\Rules;

use Framework\Contracts\RuleInterface;

class RequiredRule implements RuleInterface{
    public function validate(array $formData, string $field, array $params): bool
    {
        return !empty($formData[$field]);
    }
    public function getMessage(array $formData, string $field, array $params): string
    {
        return "This field is Required";
    }
}