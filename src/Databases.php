<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace Tinydb;

use Tinydb\Constant\StorageType;
use Tinydb\Contract\StorageInterface;
use Tinydb\Storage\JSONStorage;
use Tinydb\Storage\MemoryStorage;

class Databases
{
    /**
     * @var Table{"id":string}[]
     */
    protected array $tables;

    protected string $defaultTableName = 'default';

    protected StorageInterface $defaultStorage;

    public function __construct()
    {
        $this->defaultStorage = new MemoryStorage();
    }

    public static function open(string $db)
    {
    }

    protected function makeStorage(StorageType $storageType): StorageInterface
    {
        if ($storageType->isJSONStorage()) {
            return new JSONStorage();
        }

        return new MemoryStorage();
    }
}
