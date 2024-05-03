<?php

namespace Models;

class Role
{
    private int $id;
    private string $code;
    private string $roleName;

    public function __construct()
    {

    }

    public function getId(): int
    {
        return $this -> id;
    }

    public function setId(int $id): void
    {
        $this -> id = $id;
    }

    public function getCode(): string
    {
        return $this -> code;
    }

    public function setCode(string $code): void
    {
        $this -> code = $code;
    }

    public function getRoleName(): string
    {
        return $this -> roleName;
    }

    public function setRoleName(string $roleName): void
    {
        $this -> roleName = $roleName;
    }


}
