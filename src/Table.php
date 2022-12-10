<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace Tinydb;

use Tinydb\Contract\StorageInterface;

class Table
{
    protected string $tableName;

    protected StorageInterface $storage;

    public function __construct(string $tableName, StorageInterface $storage)
    {
        $this->tableName = $tableName;
        $this->storage = $storage;
    }

    public function insert()
    {
    }

    public function all()
    {
    }

    public function get()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }

    public function truncate()
    {
    }

    public function count()
    {
    }
}
