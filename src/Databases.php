<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace Tinydb;

use Tinydb\Constant\Database;
use Tinydb\Constant\StorageType;
use Tinydb\Contract\StorageInterface;
use Tinydb\FileSystem\Directory;
use Tinydb\Storage\JSONStorage;
use Tinydb\Storage\MemoryStorage;

class Databases
{
    protected string $basePath = '';

    /**
     * @var Table{"id":string}[]
     */
    protected array $tables = [];

    protected string $dbName = Database::DEFAULT_DATABASE_NAME;

    protected string $dbPath = '';

    protected StorageInterface $defaultStorage;

    public function __construct(string $basePath)
    {
        $this->basePath = $basePath;
        $this->defaultStorage = new MemoryStorage();
    }

    public function table(string $tableName): Table
    {
        return new Table();
    }

    public function open(?string $dbName, ?StorageType $storageTyp): static
    {
        ! is_null($dbName) && $this->dbName = $dbName;
        $this->dbPath = $this->basePath . DIRECTORY_SEPARATOR . $this->dbName;
        Directory::existAndCreate($this->dbPath);
        ! is_null($storageTyp) && $this->defaultStorage = $this->makeStorage($storageTyp);
        return $this;
    }

    public function schema(): Schema
    {
        return new Schema($this);
    }

    protected function makeStorage(StorageType $storageType): StorageInterface
    {
        if ($storageType->isJSONStorage()) {
            return new JSONStorage();
        }

        return new MemoryStorage();
    }
}
