<?php

declare(strict_types=1);

namespace Jenky\Concurrency\Pool\Tests;

use Jenky\Concurrency\Pool\PoolInterface;
use Jenky\Concurrency\Pool\PoolTrait;

final class NullPool implements PoolInterface
{
    use PoolTrait;

    public function __construct(
        private array $responses = []
    ) {
    }

    public function send(iterable $requests): array
    {
        return $this->responses;
    }
}
