<?php

declare(strict_types=1);

namespace Framework\Contracts;

//It will call next middleware
interface MiddlewareInterface
{
    public function process(callable $next);
}
