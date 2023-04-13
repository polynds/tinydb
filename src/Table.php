<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace Tinydb;

use Tinydb\Constant\Table as TableConstant;
use Tinydb\Contract\StorageInterface;
use Tinydb\FileSystem\Directory;

class Table
{
    protected string $tableName = TableConstant::DEFAULT_TABLE_NAME;

    protected string $tablePath = '';

    protected StorageInterface $storage;

    public function __construct(?string $tableName, string $basePath, StorageInterface $storage)
    {
        ! is_null($tableName) && $this->tableName = $tableName;

        $this->tablePath = $basePath . DIRECTORY_SEPARATOR . $this->tableName;

        Directory::existAndCreate($this->tablePath);

        $this->storage = $storage;
    }

    public function query(): Query
    {
        return new Query($this);
    }

    public function storage(): StorageInterface
    {
        return $this->storage;
    }
}
