<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace Tinydb;

use Tinydb\Constant\StorageType;

/**
 * @method open(string $db,StorageType $storageType)
 * @method table(string $tableName)
 */
class TinyDB
{
    protected static ?TinyDB $instance;

    protected Databases $db;

    private function __construct()
    {
        $this->db = new Databases();
    }

    public static function __callStatic(string $name, array $arguments)
    {
        return static::getInstance()->getDb()->{$name}(...$arguments);
    }

    public function getDb(): Databases
    {
        return $this->db;
    }

    protected static function getInstance(): TinyDB
    {
        return ! is_null(static::$instance) ? static::$instance : (static::$instance = new TinyDB());
    }
}
