<?php

class Animal
{
    private int $id;
    private string $name;
    private bool $isActive;

    public function getId(): int
    {
        return $this -> id;
    }

    public function setId(int $id): void
    {
        $this -> id = $id;
    }

    public function getName(): string
    {
        return $this -> name;
    }

    public function setName(string $name): void
    {
        $this -> name = $name;
    }

    public function isActive(): bool
    {
        return $this -> isActive;
    }

    public function setIsActive(bool $isActive): void
    {
        $this -> isActive = $isActive;
    }
}
