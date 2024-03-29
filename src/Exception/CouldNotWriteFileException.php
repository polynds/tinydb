<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace Tinydb\Exception;

class CouldNotWriteFileException extends \Exception
{
    public function __construct(string $fileName, string $error)
    {
        parent::__construct(sprintf('Could not write file: %s (%s)', $fileName, $error));
    }
}
