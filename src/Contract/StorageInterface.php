<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace Tinydb\Contract;

interface StorageInterface
{
    public function read(): array;

    public function write(array $data): void;

    public function close(): bool;
}
