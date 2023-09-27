<?php

declare(strict_types=1);

namespace Framework\Contracts;
interface RuleInterface{
    public function validate(array $formData,string $field,array $params): bool;
    public function getMessage(array $formData,string $field,array $params): string;
}