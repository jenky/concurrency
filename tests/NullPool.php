<?php

declare(strict_types=1);

namespace Jenky\Concurrency\Tests;

use Jenky\Concurrency\PoolInterface;

final class NullPool implements PoolInterface
{
    private $responses = [];

    public function __construct(array $responses = [])
    {
        $this->responses = $responses;
    }

    public function concurrent(int $concurrency): PoolInterface
    {
        if ($concurrency < 1) {
            throw new \ValueError('Argument #1 ($concurrency) must be positive, got '.$concurrency);
        }

        return clone $this;
    }

    public function send(iterable $requests): array
    {
        return $this->responses;
    }
}
