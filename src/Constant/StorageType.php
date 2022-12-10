<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace Tinydb\Constant;

use Tinydb\Exception\InvalidStorageException;
use Tinydb\Storage\JSONStorage;
use Tinydb\Storage\MemoryStorage;

class StorageType
{
    public const JSON_STORAGE = JSONStorage::class;

    public const MEMORY_STORAGE = MemoryStorage::class;

    protected const MAP = [
        self::JSON_STORAGE,
        self::MEMORY_STORAGE,
    ];

    protected string $storage;

    public function __construct(string $storage)
    {
        if (! in_array($storage, self::MAP)) {
            throw new InvalidStorageException('无效的存储引擎！');
        }
        $this->storage = $storage;
    }

    public function isJSONStorage(): bool
    {
        return $this->storage === self::JSON_STORAGE;
    }

    public function isMemoryStorage(): bool
    {
        return $this->storage === self::MEMORY_STORAGE;
    }
}
