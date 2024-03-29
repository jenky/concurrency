<?php

declare(strict_types=1);

namespace Jenky\Concurrency;

/**
 * @template TReq
 * @template TRes
 */
interface PoolInterface
{
    /**
     * Set the maximum number of requests to send concurrently.
     *
     * @return static
     */
    public function concurrent(int $concurrency): PoolInterface;

    /**
     * Send concurrent requests.
     *
     * @param  iterable<TReq> $requests
     * @return array<array-key, TRes>
     */
    public function send(iterable $requests): array;
}
