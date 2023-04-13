<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace Tinydb\FileSystem;

use Tinydb\Exception\CouldNotWriteFileException;

class FileWriter
{
    public static function filePutContentsIfModified(string $path, string $content): int
    {
        $success = @file_put_contents($path, $content);
        if ($success === false) {
            $error = error_get_last();

            throw new CouldNotWriteFileException(
                $path,
                $error !== null ? $error['message'] : 'unknown cause',
            );
        }
        return $success;
    }

    public static function writeAndCreateFiles(string $path, string $content): int
    {
        $dir = dirname($path);
        if (! is_dir($dir)) {
            Directory::create($dir);
        }
        return self::write($path, $content);
    }

    public static function write(string $path, string $content): int
    {
        if ($path === 'php://memory') {
            file_put_contents($path, $content);

            return 0;
        }

        $retries = 3;
        while ($retries--) {
            try {
                self::filePutContentsIfModified($path, $content);
                break;
            } catch (\Exception $e) {
                if ($retries > 0) {
                    usleep(500000);
                    continue;
                }

                throw $e;
            }
        }

        return 0;
    }
}
