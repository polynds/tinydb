<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace Tinydb\Contract;

interface SchemaInterface
{
    public function truncate(string $tableName): bool;

    public function tables(): array;
}
