<?php

declare(strict_types=1);

namespace Framework;

use Framework\Contracts\RuleInterface;
use Framework\Exceptions\ValidationException;

class Validator
{
    private array $rules = [];
    public function add(string $alias, RuleInterface $rule)
    {
        $this->rules[$alias] = $rule;
    }
    public function validate(array $formData, array $fields)
    {
        $errors = [];
        foreach ($fields as $fieldName => $rules) {
            foreach ($rules as $rule) {
                $ruleParams = [];
                if (str_contains($rule, ':')) {
                    [$rule, $ruleParams] = explode(':', $rule); //for ease we destructure array
                    $ruleParams = explode(',', $ruleParams);
                    // dd($ruleParams);
                }
                $ruleValidator = $this->rules[$rule];

                if ($ruleValidator->validate($formData, $fieldName, $ruleParams)) {
                    continue;
                }
                // echo "Error <br>";
                $errors[$fieldName][] = $ruleValidator->getMessage($formData, $fieldName, $ruleParams);
            }
        }
        if (count($errors)) {
            throw new ValidationException($errors);
        }
    }
}
