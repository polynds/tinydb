<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace Tinydb;

use Tinydb\Constant\StorageType;

/**
 * @method static open(?string $dbName, ?StorageType $storageType)
 */
class TinyDB
{
    protected static ?TinyDB $instance;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    public static function __callStatic(string $name, array $arguments)
    {
        return static::getInstance()->getDb()->{$name}(...$arguments);
    }

    public function getDb(): Databases
    {
        return new Databases(basename(__DIR__));
    }

    protected static function getInstance(): TinyDB
    {
        return ! is_null(static::$instance) ? static::$instance : (static::$instance = new TinyDB());
    }
}
