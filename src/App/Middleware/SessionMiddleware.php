<?php

declare(strict_types=1);

namespace App\Middleware;

use Framework\Contracts\MiddlewareInterface;
use App\Exceptions\SessionException;

class SessionMiddleware implements MiddlewareInterface
{
    public function process(callable $next)
    {
        if (session_status() === PHP_SESSION_ACTIVE) {
            throw new SessionException("Session is already active.");
        }
        if (headers_sent($filename, $line)) {
            throw new SessionException("Headers are already sent. You can enable output buffer or you see the error coming from {$filename} and Line: {$line}");
        }
        session_start();
        $next();
        session_write_close();
    }
}
