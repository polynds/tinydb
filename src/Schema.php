<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace Tinydb;

use Tinydb\Contract\SchemaInterface;

class Schema implements SchemaInterface
{
    protected Databases $databases;

    public function __construct(Databases $databases)
    {
        $this->databases = $databases;
    }

    public function truncate(string $tableName): bool
    {
        return true;
    }

    public function tables(): array
    {
        return [];
    }
}
