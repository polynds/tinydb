<?php

declare(strict_types=1);
/**
 * happy coding!!!
 */
namespace Tinydb;

class Record
{
    protected int $id;

    protected array $data;

    public function __construct(int $id, array $data)
    {
        $this->id = $id;
        $this->data = $data;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): Record
    {
        $this->id = $id;
        return $this;
    }

    public function getData(): array
    {
        return $this->data;
    }

    public function setData(array $data): Record
    {
        $this->data = $data;
        return $this;
    }
}
