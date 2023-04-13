<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace Tinydb\Exception;

class CouldNotReadFileException extends \Exception
{
    public function __construct(string $fileName, string $error = '')
    {
        parent::__construct(sprintf('Could not read file: %s (%s)', $fileName, $error));
    }
}
