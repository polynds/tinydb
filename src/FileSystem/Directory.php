<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace Tinydb\FileSystem;

class Directory
{
    public static function create(string $path): bool
    {
        $dirname = dirname($path);
        if ($path != '.' && $path != '/') {
            self::create(dirname($path));
        }

        if (file_exists($path)) {
            return is_writable($path);
        }

        return is_writable($dirname) && mkdir($path, 0777, true);
    }

    public static function existAndCreate(string $path): void
    {
        if (! is_dir($path)) {
            static::create($path);
        }
    }
}
