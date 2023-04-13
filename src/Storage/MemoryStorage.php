<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace Tinydb\Storage;

use Tinydb\Contract\StorageInterface;

class MemoryStorage implements StorageInterface
{

    public function read(): array
    {
        return [];
    }

    public function write(array $data): void
    {
    }

    public function close(): bool
    {
        return true;
    }
}
