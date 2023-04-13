<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace Tinydb;

use Tinydb\Contract\QueryInterface;

class Query implements QueryInterface
{
    protected Table $table;

    public function __construct(Table $table)
    {
        $this->table = $table;
    }

    public function set(string $key, mixed $data): bool
    {
        return true;
    }

    public function get(string $key): mixed
    {
        return null;
    }

    public function del(string $key)
    {
        // TODO: Implement del() method.
    }

    public function all(): array
    {
        return [];
    }

    public function count(): int
    {
        return 0;
    }
}
