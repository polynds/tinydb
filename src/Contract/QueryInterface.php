<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace Tinydb\Contract;

interface QueryInterface
{
    public function set(string $key, mixed $data): bool;

    public function get(string $key): mixed;

    public function del(string $key);

    public function all(): array;

    public function count(): int;
}
