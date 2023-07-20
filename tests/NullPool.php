<?php

declare(strict_types=1);

namespace Jenky\Concurrency\Tests;

use Jenky\Concurrency\PoolInterface;
use Jenky\Concurrency\PoolTrait;

final class NullPool implements PoolInterface
{
    use PoolTrait;

    private $responses = [];

    public function __construct(array $responses = [])
    {
        $this->responses = $responses;
    }

    public function send(iterable $requests): array
    {
        return $this->responses;
    }
}
