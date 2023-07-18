<?php

declare(strict_types=1);

namespace Jenky\Concurrency\Pool\Tests;

final class DummyRequest
{
    public function __construct(
        private string $uri = 'https://example.com',
        private string $method = 'GET'
    ) {
    }

    public function method(): string
    {
        return $this->method;
    }

    public function endpoint(): string
    {
        return $this->uri;
    }
}
